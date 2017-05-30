<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 01/07/16
 * Time: 15:27
 */

namespace App;


class PageViewModel
{
    var $url;
    var $visits;
    var $avgLoadingTime;
    var $exitCount;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getVisits()
    {
        return $this->visits;
    }

    /**
     * @param mixed $visits
     */
    public function setVisits($visits)
    {
        $this->visits = $visits;
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
    public function getExitCount()
    {
        return $this->exitCount;
    }

    /**
     * @param mixed $exitCount
     */
    public function setExitCount($exitCount)
    {
        $this->exitCount = $exitCount;
    }
}