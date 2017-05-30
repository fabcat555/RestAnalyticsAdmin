<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 01/07/16
 * Time: 15:27
 */

namespace App;


class StatisticsViewModel
{
    private $bounceRate;
    private $avgSessionTime;
    private $avgLoadingTime;
    private $pagesPerSession;

    /**
     * @return mixed
     */
    public function getBounceRate()
    {
        return $this->bounceRate;
    }

    /**
     * @param mixed $bounceRate
     */
    public function setBounceRate($bounceRate)
    {
        $this->bounceRate = $bounceRate;
    }

    /**
     * @return mixed
     */
    public function getAvgSessionTime()
    {
        return $this->avgSessionTime;
    }

    /**
     * @param mixed $avgSessionTime
     */
    public function setAvgSessionTime($avgSessionTime)
    {
        $this->avgSessionTime = $avgSessionTime;
    }

    /**
     * @return mixed
     */
    public function getAvgLoadingTime()
    {
        return $this->avgLoadingTime;
    }

    /**
     * @param mixed $avgLoadingTime
     */
    public function setAvgLoadingTime($avgLoadingTime)
    {
        $this->avgLoadingTime = $avgLoadingTime;
    }

    /**
     * @return mixed
     */
    public function getPagesPerSession()
    {
        return $this->pagesPerSession;
    }

    /**
     * @param mixed $pagesPerSession
     */
    public function setPagesPerSession($pagesPerSession)
    {
        $this->pagesPerSession = $pagesPerSession;
    }
}