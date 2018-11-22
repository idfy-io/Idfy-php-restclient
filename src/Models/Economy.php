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
class Economy implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Year
     * @var integer|null $year public property
     */
    public $year;

    /**
     * @todo Write general description for this property
     * @maps Turnover
     * @var integer|null $turnover public property
     */
    public $turnover;

    /**
     * @todo Write general description for this property
     * @maps OperatingProfit
     * @var integer|null $operatingProfit public property
     */
    public $operatingProfit;

    /**
     * @todo Write general description for this property
     * @maps Equity
     * @var double|null $equity public property
     */
    public $equity;

    /**
     * @todo Write general description for this property
     * @maps Employees
     * @var integer|null $employees public property
     */
    public $employees;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $year            Initialization value for $this->year
     * @param integer $turnover        Initialization value for $this->turnover
     * @param integer $operatingProfit Initialization value for $this->operatingProfit
     * @param double  $equity          Initialization value for $this->equity
     * @param integer $employees       Initialization value for $this->employees
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->year            = func_get_arg(0);
            $this->turnover        = func_get_arg(1);
            $this->operatingProfit = func_get_arg(2);
            $this->equity          = func_get_arg(3);
            $this->employees       = func_get_arg(4);
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
        $json['Year']            = $this->year;
        $json['Turnover']        = $this->turnover;
        $json['OperatingProfit'] = $this->operatingProfit;
        $json['Equity']          = $this->equity;
        $json['Employees']       = $this->employees;

        return array_merge($json, $this->additionalProperties);
    }
}
