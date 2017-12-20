<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Lisk
{
    const ID = 19745;

    const SYMBOL = 'LSK';

    const NAME = 'Lisk';

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