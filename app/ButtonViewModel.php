<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 01/07/16
 * Time: 15:27
 */

namespace App;


class ButtonViewModel
{
    var $buttonId;
    var $clicks;

    /**
     * @return mixed
     */
    public function getButtonId()
    {
        return $this->buttonId;
    }

    /**
     * @param mixed $buttonId
     */
    public function setButtonId($buttonId)
    {
        $this->buttonId = $buttonId;
    }

    /**
     * @return mixed
     */
    public function getClicks()
    {
        return $this->clicks;
    }

    /**
     * @param mixed $clicks
     */
    public function setClicks($clicks)
    {
        $this->clicks = $clicks;
    }


}