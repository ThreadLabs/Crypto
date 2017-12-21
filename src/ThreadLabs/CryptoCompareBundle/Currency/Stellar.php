<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Stellar implements CurrencyInterface
{
    const ID = 4614;

    const SYMBOL = 'XLM';

    const NAME = 'Stellar';

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