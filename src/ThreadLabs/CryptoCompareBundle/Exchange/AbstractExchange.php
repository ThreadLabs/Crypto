<?php

namespace ThreadLabs\CryptoCompareBundle\Exchange;

use ThreadLabs\CryptoCompareBundle\Currency\CurrencyPair;

abstract class AbstractExchange
{
    /**
     * @return int
     */
    abstract public function getId();

    /**
     * @return string
     */
    abstract public function getName();

    /**
     * @return CurrencyPair[]
     */
    abstract public function getAvailablePairs();
}