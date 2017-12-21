<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

interface CurrencyInterface
{
    /**
     * @return int
     */
    public function getId();

    /**
     * @return string
     */
    public function getSymbol();

    /**
     * @return string
     */
    public function getName();
}