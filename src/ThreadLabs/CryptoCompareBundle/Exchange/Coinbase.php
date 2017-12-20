<?php

namespace ThreadLabs\CryptoCompareBundle\Exchange;

class Coinbase
{
    const NAME = 'Coinbase';

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }
}