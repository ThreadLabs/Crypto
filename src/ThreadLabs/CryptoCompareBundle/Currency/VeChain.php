<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class VeChain
{
    const ID = 236131;

    const SYMBOL = 'VEN';

    const NAME = 'VeChain';

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