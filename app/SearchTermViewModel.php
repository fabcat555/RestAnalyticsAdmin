<?php
/**
 * Created by PhpStorm.
 * User: Fabio
 * Date: 01/07/16
 * Time: 15:27
 */

namespace App;


class SearchTermViewModel
{
    var $searchTerm;
    var $hits;

    /**
     * @return mixed
     */
    public function getSearchTerm()
    {
        return $this->searchTerm;
    }

    /**
     * @param mixed $searchTerm
     */
    public function setSearchTerm($searchTerm)
    {
        $this->searchTerm = $searchTerm;
    }

    /**
     * @return mixed
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * @param mixed $hits
     */
    public function setHits($hits)
    {
        $this->hits = $hits;
    }


}