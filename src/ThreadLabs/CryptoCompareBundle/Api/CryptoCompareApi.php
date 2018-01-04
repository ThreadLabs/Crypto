<?php

namespace ThreadLabs\CryptoCompareBundle\Api;

use GuzzleHttp\Client;
use ThreadLabs\CryptoCompareBundle\Currency\AbstractCurrency;
use ThreadLabs\CryptoCompareBundle\Currency\CurrencyPair;
use ThreadLabs\CryptoCompareBundle\Exchange\AbstractExchange;

class CryptoCompareApi
{
    const BASE_URI_API = 'https://www.cryptocompare.com/api/data/';
    const BASE_URI_MIN_API = 'https://min-api.cryptocompare.com/data/';

    const ENDPOINT_HISTO_MINUTE = 'histominute';
    const ENDPOINT_HISTO_HOUR   = 'histohour';
    const ENDPOINT_HISTO_DAY    = 'histoday';
    const ENDPOINT_SOCIAL_STATS = 'socialstats';

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
     * @param CurrencyPair            $pair
     * @param string|AbstractExchange $exchange
     * @param array                   $options
     *
     * @return array|null
     */
    public function getHistoMinute(CurrencyPair $pair, AbstractExchange $exchange, array $options = [])
    {
        $parameters = $this->buildHistoryParameters($pair, $exchange, $options);

        return $this->request(self::BASE_URI_MIN_API, self::ENDPOINT_HISTO_MINUTE, $parameters);
    }

    /**
     * @param CurrencyPair            $pair
     * @param string|AbstractExchange $exchange
     * @param array                   $options
     *
     * @return array|null
     */
    public function getHistoHour(CurrencyPair $pair, AbstractExchange $exchange, array $options = [])
    {
        $parameters = $this->buildHistoryParameters($pair, $exchange, $options);

        return $this->request(self::BASE_URI_MIN_API, self::ENDPOINT_HISTO_HOUR, $parameters);
    }

    /**
     * @param CurrencyPair            $pair
     * @param string|AbstractExchange $exchange
     * @param array                   $options
     *
     * @return array|null
     */
    public function getHistoDay(CurrencyPair $pair, AbstractExchange $exchange, array $options = [])
    {
        $parameters = $this->buildHistoryParameters($pair, $exchange, $options);

        return $this->request(self::BASE_URI_MIN_API, self::ENDPOINT_HISTO_DAY, $parameters);
    }

    /**
     * @param AbstractCurrency $currency
     *
     * @return array|null
     */
    public function getSocialStatsForCurrency(AbstractCurrency $currency)
    {
        $parameters = [
            'id' => $currency->getId(),
        ];

        return $this->request(self::BASE_URI_API, self::ENDPOINT_SOCIAL_STATS, $parameters);
    }

    /**
     * @param AbstractExchange $exchange
     *
     * @return array|null
     */
    public function getSocialStatsForExchange(AbstractExchange $exchange)
    {
        $parameters = [
            'id' => $exchange->getId(),
        ];

        return $this->request(self::BASE_URI_API, self::ENDPOINT_SOCIAL_STATS, $parameters);
    }

    /**
     * @param CurrencyPair            $pair
     * @param string|AbstractExchange $exchange
     * @param array                   $options
     *
     * @return array
     */
    private function buildHistoryParameters(CurrencyPair $pair, AbstractExchange $exchange, array $options = [])
    {
        return array_replace($options, [
            'fsym' => $pair->getFrom()->getSymbol(),
            'tsym' => $pair->getTo()->getSymbol(),
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