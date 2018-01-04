<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Timeline\DataPoint\CurrencyDataPoint;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Snc\RedisBundle\Client\Phpredis\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ThreadLabs\CryptoCompareBundle\Exchange\AbstractExchange;
use ThreadLabs\CryptoCompareBundle\Exchange\Binance;
use ThreadLabs\CryptoCompareBundle\Exchange\Coinbase;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        /** @var Client $redis */
        $redis = $this->get('snc_redis.default');
        $cryptoCompareApi = $this->get('threadlabs.crypto_compare.api');

        $exchanges = [
            new Coinbase(),
            new Binance(),
        ];

        /** @var AbstractExchange $exchange */
        foreach ($exchanges as $exchange) {
            $pairs = $exchange->getAvailablePairs();

            foreach ($pairs as $pair) {

                $options = [
                    'limit'     => 1,
                    'aggregate' => 5,
                ];

                $response = $cryptoCompareApi->getHistoMinute($pair, $exchange, $options);

                $rawData   = $response['Data'][0];
                $dataPoint = new CurrencyDataPoint();
                $id        = $redis->incr('currency:id');

                $dataPoint->setTime($rawData['time']);
                $dataPoint->setOpen($rawData['open']);
                $dataPoint->setClose($rawData['close']);
                $dataPoint->setHigh($rawData['high']);
                $dataPoint->setLow($rawData['low']);
                $dataPoint->setVolumeFrom($rawData['volumefrom']);
                $dataPoint->setVolumeTo($rawData['volumeto']);

                $response = $cryptoCompareApi->getSocialStatsForCurrency($pair->getFrom());

                $rawData = $response['Data'];

                $dataPoint->setTotalSocialPoints($rawData['General']['Points']);
                $dataPoint->setCryptoCompareSocialPoints($rawData['CryptoCompare']['Points']);
                $dataPoint->setCryptoCompareFollowers($rawData['CryptoCompare']['Followers']);
                $dataPoint->setCryptoComparePosts($rawData['CryptoCompare']['Posts']);
                $dataPoint->setCryptoComparePageViews($rawData['CryptoCompare']['Comments']);
                $dataPoint->setCryptoCompareComments($rawData['CryptoCompare']['Comments']);
                $dataPoint->setTwitterSocialPoints($rawData['Twitter']['Points']);
                $dataPoint->setTwitterLists($rawData['Twitter']['lists']);
                $dataPoint->setTwitterTweets($rawData['Twitter']['statuses']);
                $dataPoint->setTwitterFollowers($rawData['Twitter']['followers']);
                $dataPoint->setRedditSocialPoints($rawData['Reddit']['Points']);
                $dataPoint->setRedditPostsPerHour($rawData['Reddit']['posts_per_hour']);
                $dataPoint->setRedditCommentsPerHour($rawData['Reddit']['comments_per_hour']);
                $dataPoint->setRedditPostsPerDay($rawData['Reddit']['posts_per_day']);
                $dataPoint->setRedditCommentsPerDay($rawData['Reddit']['comments_per_day']);
                $dataPoint->setRedditActiveUsers($rawData['Reddit']['active_users']);
                $dataPoint->setRedditCommunityCreation($rawData['Reddit']['community_creation']);
                $dataPoint->setRedditSubscribers($rawData['Reddit']['subscribers']);
                $dataPoint->setFacebookSocialPoints($rawData['Facebook']['Points']);
                $dataPoint->setFacebookLikes($rawData['Facebook']['likes']);
                $dataPoint->setFacebookTalkingAbout($rawData['Facebook']['talking_about']);
                $dataPoint->setCodeRepositorySocialPoints($rawData['CodeRepository']['Points']);

                $cleanedData = $dataPoint->toArray();

                $cleanedData['id'] = $id;

                $redis->hmset($id, $cleanedData);
                $redis->zadd('currency', $dataPoint->getTime(), $id);
            }
        }

        $sortedSet = $redis->zRange('currency', 0, -1, 'WITHSCORES');

        $results = [];

        foreach ($sortedSet as $id => $score) {
            $results[] = $redis->hgetall($id);
        }

        dump($results);die();

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
