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
class PersonEconomy implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Year
     * @var integer|null $year public property
     */
    public $year;

    /**
     * @todo Write general description for this property
     * @maps NetIncome
     * @var double|null $netIncome public property
     */
    public $netIncome;

    /**
     * @todo Write general description for this property
     * @maps IncomeChange
     * @var double|null $incomeChange public property
     */
    public $incomeChange;

    /**
     * @todo Write general description for this property
     * @maps Fortune
     * @var double|null $fortune public property
     */
    public $fortune;

    /**
     * @todo Write general description for this property
     * @maps AssessedTax
     * @var double|null $assessedTax public property
     */
    public $assessedTax;

    /**
     * @todo Write general description for this property
     * @maps TaxClass
     * @var string|null $taxClass public property
     */
    public $taxClass;

    /**
     * @todo Write general description for this property
     * @maps Municipal
     * @var string|null $municipal public property
     */
    public $municipal;

    /**
     * @todo Write general description for this property
     * @maps MunicipalNumber
     * @var string|null $municipalNumber public property
     */
    public $municipalNumber;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $year            Initialization value for $this->year
     * @param double  $netIncome       Initialization value for $this->netIncome
     * @param double  $incomeChange    Initialization value for $this->incomeChange
     * @param double  $fortune         Initialization value for $this->fortune
     * @param double  $assessedTax     Initialization value for $this->assessedTax
     * @param string  $taxClass        Initialization value for $this->taxClass
     * @param string  $municipal       Initialization value for $this->municipal
     * @param string  $municipalNumber Initialization value for $this->municipalNumber
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->year            = func_get_arg(0);
            $this->netIncome       = func_get_arg(1);
            $this->incomeChange    = func_get_arg(2);
            $this->fortune         = func_get_arg(3);
            $this->assessedTax     = func_get_arg(4);
            $this->taxClass        = func_get_arg(5);
            $this->municipal       = func_get_arg(6);
            $this->municipalNumber = func_get_arg(7);
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
        $json['NetIncome']       = $this->netIncome;
        $json['IncomeChange']    = $this->incomeChange;
        $json['Fortune']         = $this->fortune;
        $json['AssessedTax']     = $this->assessedTax;
        $json['TaxClass']        = $this->taxClass;
        $json['Municipal']       = $this->municipal;
        $json['MunicipalNumber'] = $this->municipalNumber;

        return array_merge($json, $this->additionalProperties);
    }
}
