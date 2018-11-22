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
class OrganizationResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps MvaNumber
     * @var integer|null $mvaNumber public property
     */
    public $mvaNumber;

    /**
     * @todo Write general description for this property
     * @maps Prokura
     * @var string|null $prokura public property
     */
    public $prokura;

    /**
     * @todo Write general description for this property
     * @maps Signature
     * @var string|null $signature public property
     */
    public $signature;

    /**
     * @todo Write general description for this property
     * @maps Report
     * @var string|null $report public property
     */
    public $report;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $mvaNumber Initialization value for $this->mvaNumber
     * @param string  $prokura   Initialization value for $this->prokura
     * @param string  $signature Initialization value for $this->signature
     * @param string  $report    Initialization value for $this->report
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->mvaNumber = func_get_arg(0);
            $this->prokura   = func_get_arg(1);
            $this->signature = func_get_arg(2);
            $this->report    = func_get_arg(3);
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
        $json['MvaNumber'] = $this->mvaNumber;
        $json['Prokura']   = $this->prokura;
        $json['Signature'] = $this->signature;
        $json['Report']    = $this->report;

        return array_merge($json, $this->additionalProperties);
    }
}
