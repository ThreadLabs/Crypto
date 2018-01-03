<?php

namespace ThreadLabs\CryptoCompareBundle\Exchange;

use ThreadLabs\CryptoCompareBundle\Currency\Bitcoin;
use ThreadLabs\CryptoCompareBundle\Currency\CurrencyPair;
use ThreadLabs\CryptoCompareBundle\Currency\Ethereum;
use ThreadLabs\CryptoCompareBundle\Currency\Litecoin;
use ThreadLabs\CryptoCompareBundle\Currency\USDollar;

class Coinbase extends AbstractExchange
{
    const NAME = 'Coinbase';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function getAvailablePairs()
    {
        return [
            new CurrencyPair(new Bitcoin(), new USDollar()),
            new CurrencyPair(new Ethereum(), new USDollar()),
            new CurrencyPair(new Litecoin(), new USDollar()),
        ];
    }
}