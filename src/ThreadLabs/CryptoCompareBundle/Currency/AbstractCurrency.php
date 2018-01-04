<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

abstract class AbstractCurrency
{
    /**
     * @return int
     */
    abstract public function getId();

    /**
     * @return string
     */
    abstract public function getSymbol();

    /**
     * @return string
     */
    abstract public function getName();
}