<?php

namespace ThreadLabs\CryptoCompareBundle\Exchange;

use ThreadLabs\CryptoCompareBundle\Currency\Bitcoin;
use ThreadLabs\CryptoCompareBundle\Currency\Cardano;
use ThreadLabs\CryptoCompareBundle\Currency\CurrencyPair;
use ThreadLabs\CryptoCompareBundle\Currency\DigitalCash;
use ThreadLabs\CryptoCompareBundle\Currency\IOTA;
use ThreadLabs\CryptoCompareBundle\Currency\Ripple;
use ThreadLabs\CryptoCompareBundle\Currency\Stellar;
use ThreadLabs\CryptoCompareBundle\Currency\Tronix;
use ThreadLabs\CryptoCompareBundle\Currency\VeChain;
use ThreadLabs\CryptoCompareBundle\Currency\Verge;

class Binance extends AbstractExchange
{
    // @todo find the right IDs
    const ID = 0;

    const NAME = 'Binance';

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return self::ID;
    }

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
            new CurrencyPair(new Ripple(), new Bitcoin()),
            new CurrencyPair(new Tronix(), new Bitcoin()),
            new CurrencyPair(new VeChain(), new Bitcoin()),
            new CurrencyPair(new Stellar(), new Bitcoin()),
            new CurrencyPair(new IOTA(), new Bitcoin()),
            new CurrencyPair(new Cardano(), new Bitcoin()),
            new CurrencyPair(new DigitalCash(), new Bitcoin()),
            new CurrencyPair(new Verge(), new Bitcoin()),
        ];
    }
}