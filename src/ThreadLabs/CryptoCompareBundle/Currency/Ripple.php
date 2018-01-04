<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Ripple extends AbstractCurrency
{
    const ID = 5031;

    const SYMBOL = 'XRP';

    const NAME = 'Ripple';

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