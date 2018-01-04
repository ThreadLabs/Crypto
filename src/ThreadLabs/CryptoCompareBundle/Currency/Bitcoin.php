<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Bitcoin extends AbstractCurrency
{
    const ID = 1182;

    const SYMBOL = 'BTC';

    const NAME = 'Bitcoin';

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