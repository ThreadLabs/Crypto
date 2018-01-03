<?php

namespace ThreadLabs\CryptoCompareBundle\Exchange;

abstract class AbstractExchange
{
    /**
     * @return string
     */
    abstract public function getName();

    /**
     * @return array
     */
    abstract public function getAvailablePairs();
}