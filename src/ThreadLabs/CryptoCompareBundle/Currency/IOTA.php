<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class IOTA implements CurrencyInterface
{
    const ID = 127356;

    const SYMBOL = 'IOT';

    const NAME = 'IOTA';

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