<?php

namespace ThreadLabs\CryptoCompareBundle\Exchange;

class Binance
{
    const NAME = 'Binance';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }
}