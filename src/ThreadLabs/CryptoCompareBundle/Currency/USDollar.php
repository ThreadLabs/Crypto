<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class USDollar implements CurrencyInterface
{
    const ID = 0;

    const SYMBOL = 'USD';

    const NAME = 'US Dollar';

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