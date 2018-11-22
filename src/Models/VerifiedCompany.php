<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Data retrieved before the actual screening (data enhancement).
 */
class VerifiedCompany implements JsonSerializable
{
    /**
     * Business registration number
     * @var string|null $regNo public property
     */
    public $regNo;

    /**
     * D-U-N-S number
     * @var string|null $dunsNo public property
     */
    public $dunsNo;

    /**
     * Status code
     * @var array|null $status public property
     */
    public $status;

    /**
     * Name of company
     * @var string|null $name public property
     */
    public $name;

    /**
     * Two-letter code as specified in the ISO 3166 standard
     * @var string|null $nationality public property
     */
    public $nationality;

    /**
     * Name of data provider
     * @var string|null $provider public property
     */
    public $provider;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $regNo       Initialization value for $this->regNo
     * @param string $dunsNo      Initialization value for $this->dunsNo
     * @param array  $status      Initialization value for $this->status
     * @param string $name        Initialization value for $this->name
     * @param string $nationality Initialization value for $this->nationality
     * @param string $provider    Initialization value for $this->provider
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->regNo       = func_get_arg(0);
            $this->dunsNo      = func_get_arg(1);
            $this->status      = func_get_arg(2);
            $this->name        = func_get_arg(3);
            $this->nationality = func_get_arg(4);
            $this->provider    = func_get_arg(5);
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
        $json['regNo']       = $this->regNo;
        $json['dunsNo']      = $this->dunsNo;
        $json['status']      = $this->status;
        $json['name']        = $this->name;
        $json['nationality'] = $this->nationality;
        $json['provider']    = $this->provider;

        return array_merge($json, $this->additionalProperties);
    }
}
