<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class QTUM extends AbstractCurrency
{
    const ID = 112392;

    const SYMBOL = 'QTUM';

    const NAME = 'QTUM';

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