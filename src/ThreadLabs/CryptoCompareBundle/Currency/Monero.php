<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Monero implements CurrencyInterface
{
    const ID = 5038;

    const SYMBOL = 'XMR';

    const NAME = 'Monero';

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