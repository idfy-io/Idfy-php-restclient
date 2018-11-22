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
class ListResultIdentificationLogItem implements JsonSerializable
{
    /**
     * Link to the next results if not set there are less then the return limit of 1000
     * @maps NextLink
     * @var string|null $nextLink public property
     */
    public $nextLink;

    /**
     * The total amount of links (pages) for the list
     * @maps TotalLinks
     * @var integer|null $totalLinks public property
     */
    public $totalLinks;

    /**
     * List of results
     * @maps List
     * @var \IdfyLib\Models\IdentificationLogItem[]|null $mlist public property
     */
    public $mlist;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $nextLink   Initialization value for $this->nextLink
     * @param integer $totalLinks Initialization value for $this->totalLinks
     * @param array   $mlist      Initialization value for $this->mlist
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->nextLink   = func_get_arg(0);
            $this->totalLinks = func_get_arg(1);
            $this->mlist      = func_get_arg(2);
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
        $json['NextLink']   = $this->nextLink;
        $json['TotalLinks'] = $this->totalLinks;
        $json['List']       = $this->mlist;

        return array_merge($json, $this->additionalProperties);
    }
}
