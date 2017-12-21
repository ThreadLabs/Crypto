<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Verge implements CurrencyInterface
{
    const ID = 4433;

    const SYMBOL = 'XVG';

    const NAME = 'Verge';

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