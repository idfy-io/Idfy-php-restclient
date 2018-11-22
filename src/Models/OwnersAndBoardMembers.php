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
class OwnersAndBoardMembers implements JsonSerializable
{
    /**
     * List of person results, same structure as documented in chapter 5.4 B2C Response, exluding
     * “bisnodeReference”
     * @var \IdfyLib\Models\PersonAmlResponse[]|null $persons public property
     */
    public $persons;

    /**
     * List of company results, same structure as current table, excluding “bisnodeReference” and
     * “ownersAndBoardMembers”
     * @var \IdfyLib\Models\CompanyAmlResponse[]|null $companies public property
     */
    public $companies;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array $persons   Initialization value for $this->persons
     * @param array $companies Initialization value for $this->companies
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->persons   = func_get_arg(0);
            $this->companies = func_get_arg(1);
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
        $json['persons']   = $this->persons;
        $json['companies'] = $this->companies;

        return array_merge($json, $this->additionalProperties);
    }
}
