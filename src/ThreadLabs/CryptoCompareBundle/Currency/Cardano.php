<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Cardano
{
    const ID = 321992;

    const SYMBOL = 'ADA';

    const NAME = 'Cardano';

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