<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class SearchResult implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps next_url
     * @var string|null $nextUrl public property
     */
    public $nextUrl;

    /**
     * @todo Write general description for this property
     * @maps Start
     * @var integer|null $start public property
     */
    public $start;

    /**
     * @todo Write general description for this property
     * @maps NumFound
     * @var integer|null $numFound public property
     */
    public $numFound;

    /**
     * @todo Write general description for this property
     * @maps Rows
     * @var integer|null $rows public property
     */
    public $rows;

    /**
     * @todo Write general description for this property
     * @maps Results
     * @var \IdfyLib\Models\LeiRecord[]|null $results public property
     */
    public $results;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $nextUrl  Initialization value for $this->nextUrl
     * @param integer $start    Initialization value for $this->start
     * @param integer $numFound Initialization value for $this->numFound
     * @param integer $rows     Initialization value for $this->rows
     * @param array   $results  Initialization value for $this->results
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->nextUrl  = func_get_arg(0);
            $this->start    = func_get_arg(1);
            $this->numFound = func_get_arg(2);
            $this->rows     = func_get_arg(3);
            $this->results  = func_get_arg(4);
        }
    }

    
    /**
     * Add an additional property to this model.
     * @param string $name  Name of property
     * @param mixed  $value Value of property
     */
    public function addAdditionalProperty($name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['next_url'] = $this->nextUrl;
        $json['Start']    = $this->start;
        $json['NumFound'] = $this->numFound;
        $json['Rows']     = $this->rows;
        $json['Results']  = $this->results;

        return array_merge($json, $this->additionalProperties);
    }
}
