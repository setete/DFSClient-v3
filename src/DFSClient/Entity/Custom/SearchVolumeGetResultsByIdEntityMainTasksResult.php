<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\SearchVolumeGetResultsByIdEntityMainTasksResultMonthly_searches;

class SearchVolumeGetResultsByIdEntityMainTasksResult 
{    
    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|double $competition;
    */
    public $competition = null;

    /**
    * @var null|integer $cpc;
    */
    public $cpc = null;

    /**
    * @var null|integer $search_volume;
    */
    public $search_volume = null;

    /**
    * @var null|NULL $categories;
    */
    public $categories = null;

    /**
    * array|SearchVolumeGetResultsByIdEntityMainTasksResultMonthly_searches[] $monthly_searches;
    */
    public $monthly_searches = [];
 
}