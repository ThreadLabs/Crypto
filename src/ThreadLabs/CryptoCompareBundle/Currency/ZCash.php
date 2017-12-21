<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class ZCash implements CurrencyInterface
{
    const ID = 24854;

    const SYMBOL = 'ZEC';

    const NAME = 'ZCash';

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