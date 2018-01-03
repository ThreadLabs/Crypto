<?php

namespace AppBundle\Entity\Timeline\DataPoint;

/**
 * SQL dump of data points
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Timeline\DataPoint\CurrencyDataPointRepository")
 */
class CurrencyDataPoint
{
    /**
     * @var int
     */
    private $time;

    /**
     * @var float
     */
    private $open;

    /**
     * @var float
     */
    private $close;

    /**
     * @var float
     */
    private $high;

    /**
     * @var float
     */
    private $low;

    /**
     * @var float
     */
    private $volumeFrom;

    /**
     * @var float
     */
    private $volumeTo;

    /**
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param int $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return float
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @param float $open
     */
    public function setOpen($open)
    {
        $this->open = $open;
    }

    /**
     * @return float
     */
    public function getClose()
    {
        return $this->close;
    }

    /**
     * @param float $close
     */
    public function setClose($close)
    {
        $this->close = $close;
    }

    /**
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param float $high
     */
    public function setHigh($high)
    {
        $this->high = $high;
    }

    /**
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param float $low
     */
    public function setLow($low)
    {
        $this->low = $low;
    }

    /**
     * @return float
     */
    public function getVolumeFrom()
    {
        return $this->volumeFrom;
    }

    /**
     * @param float $volumeFrom
     */
    public function setVolumeFrom($volumeFrom)
    {
        $this->volumeFrom = $volumeFrom;
    }

    /**
     * @return float
     */
    public function getVolumeTo()
    {
        return $this->volumeTo;
    }

    /**
     * @param float $volumeTo
     */
    public function setVolumeTo($volumeTo)
    {
        $this->volumeTo = $volumeTo;
    }
}