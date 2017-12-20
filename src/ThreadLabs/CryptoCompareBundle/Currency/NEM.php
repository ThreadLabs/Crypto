<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class NEM
{
    const ID = 5285;

    const SYMBOL = 'XEM';

    const NAME = 'NEM';

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