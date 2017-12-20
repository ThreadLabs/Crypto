<?php

namespace ThreadLabs\CryptoCompareBundle\Api;

use GuzzleHttp\Client;

class CryptoCompareApi
{
    const BASE_URI_API = 'https://www.cryptocompare.com/api/data/';
    const BASE_URI_MIN_API = 'https://min-api.cryptocompare.com/data/';

    const ENDPOINT_HISTO_MINUTE = 'histominute';

    /**
     * @var Client
     */
    private $client;

    /**
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @param string $currencyFrom
     * @param string $currencyTo
     * @param string $exchange
     * @param array  $options
     *
     * @return array|null
     */
    public function getHistoMinute($currencyFrom, $currencyTo, $exchange, array $options = [])
    {
        $parameters = $this->buildHistoryParameters($currencyFrom, $currencyTo, $exchange, $options);

        return $this->request(self::BASE_URI_MIN_API, self::ENDPOINT_HISTO_MINUTE, $parameters);
    }

    /**
     * @param string $currencyFrom
     * @param string $currencyTo
     * @param string $exchange
     * @param array  $options
     *
     * @return array
     */
    private function buildHistoryParameters($currencyFrom, $currencyTo, $exchange, array $options = [])
    {
        return array_replace($options, [
            'fsym' => $currencyFrom,
            'tsym' => $currencyTo,
            'e'    => $exchange,
        ]);
    }

    /**
     * @param  string $path
     * @param  array $parameters
     *
     * @return array|null
     */
    private function request($baseUri, $path, array $parameters)
    {
        $response = $this->client->get($baseUri.$path.'?'.http_build_query($parameters));

        return json_decode($response->getBody(), true);
    }
}