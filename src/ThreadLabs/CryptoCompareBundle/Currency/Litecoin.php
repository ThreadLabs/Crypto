<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Litecoin extends AbstractCurrency
{
    const ID = 3808;

    const SYMBOL = 'LTC';

    const NAME = 'Litecoin';

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