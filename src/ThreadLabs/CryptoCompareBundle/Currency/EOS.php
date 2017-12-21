<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class EOS implements CurrencyInterface
{
    const ID = 166503;

    const SYMBOL = 'EOS';

    const NAME = 'EOS';

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