<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Snc\RedisBundle\Client\Phpredis\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ThreadLabs\CryptoCompareBundle\Currency\Bitcoin;
use ThreadLabs\CryptoCompareBundle\Currency\USDollar;
use ThreadLabs\CryptoCompareBundle\Exchange\Coinbase;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $pairs = [

        ]


        $data = $this->get('threadlabs.crypto_compare.api')->getHistoMinute(
            Bitcoin::SYMBOL,
            USDollar::SYMBOL,
            Coinbase::NAME,
            ['limit' => 1]
        );


        dump($data); die();

        /** @var Client $redis */
        $redis = $this->get('snc_redis.default');

        foreach ($data as $datum) {

            $id = $redis->incr('currency:id');
            $datum['id'] = $id;

            $redis->hmset($id, $datum);
            $redis->zadd('currency', $datum['last_updated'], $id);
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
