<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class BitcoinCash
{
    const ID = 202330;

    const SYMBOL = 'BCH';

    const NAME = 'Bitcoin Cash';

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
    public function getSymbol()
    {
        return self::SYMBOL;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return self::NAME;
    }
}