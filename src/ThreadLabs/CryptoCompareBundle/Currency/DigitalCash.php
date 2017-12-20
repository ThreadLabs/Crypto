<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class DigitalCash
{
    const ID = 3807;

    const SYMBOL = 'DASH';

    const NAME = 'DigitalCash';

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