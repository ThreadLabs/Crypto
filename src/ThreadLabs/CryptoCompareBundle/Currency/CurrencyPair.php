<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class CurrencyPair
{
    /**
     * @var AbstractCurrency
     */
    private $from;

    /**
     * @var AbstractCurrency
     */
    private $to;

    /**
     * @param AbstractCurrency $from
     * @param AbstractCurrency $to
     */
    public function __construct(AbstractCurrency $from, AbstractCurrency $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @return AbstractCurrency
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param AbstractCurrency $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return AbstractCurrency
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param AbstractCurrency $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }


}