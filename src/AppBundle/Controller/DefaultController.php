<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Snc\RedisBundle\Client\Phpredis\Client;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $data = $this->get('coinmarketcap.api')->getTicker(1);

        /** @var Client $redis */
        $redis = $this->get('snc_redis.default');

        foreach ($data as $datum) {

            $id = $redis->incr('currencySnapshot:id');
            $datum['id'] = $id;

            $redis->hmset($id, $datum);
            $redis->zadd('currencySnapshots', $datum['last_updated'], $id);
        }

        $sortedSet = $redis->zRange('currencySnapshots', 0, -1, 'WITHSCORES');

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
