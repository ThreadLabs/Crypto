<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class Tronix implements CurrencyInterface
{
    const ID = 310829;

    const SYMBOL = 'TRX';

    const NAME = 'Tronix';

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