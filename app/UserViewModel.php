<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 01/07/16
 * Time: 15:27
 */

namespace App;


class UserViewModel
{
    var $key;
    var $count;

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * @param mixed $count
     */
    public function setCount($count)
    {
        $this->count = $count;
    }


}