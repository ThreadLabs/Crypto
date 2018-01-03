<?php

namespace ThreadLabs\CryptoCompareBundle\Currency;

class CurrencyPair
{
    /**
     * @var CurrencyInterface
     */
    private $from;

    /**
     * @var CurrencyInterface
     */
    private $to;

    /**
     * @param CurrencyInterface $from
     * @param CurrencyInterface $to
     */
    public function __construct(CurrencyInterface $from, CurrencyInterface $to)
    {
        $this->from = $from;
        $this->to = $to;
    }

    /**
     * @return CurrencyInterface
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param CurrencyInterface $from
     */
    public function setFrom($from)
    {
        $this->from = $from;
    }

    /**
     * @return CurrencyInterface
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param CurrencyInterface $to
     */
    public function setTo($to)
    {
        $this->to = $to;
    }


}