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
                $response = $cryptoCompareApi->getHistoMinute(
                    $pair->getFrom()->getSymbol(),
                    $pair->getTo()->getSymbol(),
                    $exchange->getName(),
                    [
                        'limit' => 1,
                        'aggregate' => 5,
                    ]
                );

                $data      = $response['Data'][0];
                $dataPoint = new CurrencyDataPoint();
                $id        = $redis->incr('currency:id');

                $dataPoint->setTime($data['time']);
                $dataPoint->setOpen($data['open']);
                $dataPoint->setClose($data['close']);
                $dataPoint->setHigh($data['high']);
                $dataPoint->setLow($data['low']);
                $dataPoint->setVolumeFrom($data['volumeFrom']);
                $dataPoint->setVolumeTo($data['volumeTo']);

                $datum['id'] = $id;

                $redis->hmset($id, $dataPoint->toArray());
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
