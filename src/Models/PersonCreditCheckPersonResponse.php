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
class PersonCreditCheckPersonResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * @todo Write general description for this property
     * @maps Report
     * @var string|null $report public property
     */
    public $report;

    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps Address
     * @var string|null $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @maps City
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @maps PostalCode
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @maps Score
     * @var integer|null $score public property
     */
    public $score;

    /**
     * @todo Write general description for this property
     * @maps ScoreDecision
     * @var string|null $scoreDecision public property
     */
    public $scoreDecision;

    /**
     * @todo Write general description for this property
     * @maps DateOfBirth
     * @var string|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * @todo Write general description for this property
     * @maps Age
     * @var integer|null $age public property
     */
    public $age;

    /**
     * @todo Write general description for this property
     * @maps Gender
     * @var string|null $gender public property
     */
    public $gender;

    /**
     * @todo Write general description for this property
     * @maps NumberOfPaymentDefaults
     * @var integer|null $numberOfPaymentDefaults public property
     */
    public $numberOfPaymentDefaults;

    /**
     * @todo Write general description for this property
     * @maps PaymentDefaultsAmount
     * @var double|null $paymentDefaultsAmount public property
     */
    public $paymentDefaultsAmount;

    /**
     * @todo Write general description for this property
     * @maps IncomeAndFortune
     * @var \IdfyLib\Models\PersonEconomy[]|null $incomeAndFortune public property
     */
    public $incomeAndFortune;

    /**
     * @todo Write general description for this property
     * @maps DetailedInformation
     * @var \IdfyLib\Models\PersonHentPersonResponse|null $detailedInformation public property
     */
    public $detailedInformation;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string                   $requestId               Initialization value for $this->requestId
     * @param string                   $report                  Initialization value for $this->report
     * @param string                   $name                    Initialization value for $this->name
     * @param string                   $address                 Initialization value for $this->address
     * @param string                   $city                    Initialization value for $this->city
     * @param string                   $postalCode              Initialization value for $this->postalCode
     * @param integer                  $score                   Initialization value for $this->score
     * @param string                   $scoreDecision           Initialization value for $this->scoreDecision
     * @param string                   $dateOfBirth             Initialization value for $this->dateOfBirth
     * @param integer                  $age                     Initialization value for $this->age
     * @param string                   $gender                  Initialization value for $this->gender
     * @param integer                  $numberOfPaymentDefaults Initialization value for $this-
     *                                                            >numberOfPaymentDefaults
     * @param double                   $paymentDefaultsAmount   Initialization value for $this->paymentDefaultsAmount
     * @param array                    $incomeAndFortune        Initialization value for $this->incomeAndFortune
     * @param PersonHentPersonResponse $detailedInformation     Initialization value for $this->detailedInformation
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->requestId               = func_get_arg(0);
            $this->report                  = func_get_arg(1);
            $this->name                    = func_get_arg(2);
            $this->address                 = func_get_arg(3);
            $this->city                    = func_get_arg(4);
            $this->postalCode              = func_get_arg(5);
            $this->score                   = func_get_arg(6);
            $this->scoreDecision           = func_get_arg(7);
            $this->dateOfBirth             = func_get_arg(8);
            $this->age                     = func_get_arg(9);
            $this->gender                  = func_get_arg(10);
            $this->numberOfPaymentDefaults = func_get_arg(11);
            $this->paymentDefaultsAmount   = func_get_arg(12);
            $this->incomeAndFortune        = func_get_arg(13);
            $this->detailedInformation     = func_get_arg(14);
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
        $json['RequestId']               = $this->requestId;
        $json['Report']                  = $this->report;
        $json['Name']                    = $this->name;
        $json['Address']                 = $this->address;
        $json['City']                    = $this->city;
        $json['PostalCode']              = $this->postalCode;
        $json['Score']                   = $this->score;
        $json['ScoreDecision']           = $this->scoreDecision;
        $json['DateOfBirth']             = $this->dateOfBirth;
        $json['Age']                     = $this->age;
        $json['Gender']                  = $this->gender;
        $json['NumberOfPaymentDefaults'] = $this->numberOfPaymentDefaults;
        $json['PaymentDefaultsAmount']   = $this->paymentDefaultsAmount;
        $json['IncomeAndFortune']        = $this->incomeAndFortune;
        $json['DetailedInformation']     = $this->detailedInformation;

        return array_merge($json, $this->additionalProperties);
    }
}
