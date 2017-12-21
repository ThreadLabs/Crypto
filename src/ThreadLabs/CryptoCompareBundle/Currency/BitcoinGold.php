<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class BitcoinGold implements CurrencyInterface
{
    const ID = 347235;

    const SYMBOL = 'BTG';

    const NAME = 'Bitcoin Gold';

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