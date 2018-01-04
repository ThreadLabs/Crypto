<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class NEO extends AbstractCurrency
{
    const ID = 27368;

    const SYMBOL = 'NEO';

    const NAME = 'NEO';

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