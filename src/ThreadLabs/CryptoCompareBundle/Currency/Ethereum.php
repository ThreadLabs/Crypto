<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Ethereum extends AbstractCurrency
{
    const ID = 7605;

    const SYMBOL = 'ETH';

    const NAME = 'Ethereum';

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