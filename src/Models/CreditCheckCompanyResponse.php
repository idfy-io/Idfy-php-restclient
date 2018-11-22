<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;
use IdfyLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class CreditCheckCompanyResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps OrgNumber
     * @var integer|null $orgNumber public property
     */
    public $orgNumber;

    /**
     * @todo Write general description for this property
     * @maps OrgName
     * @var string|null $orgName public property
     */
    public $orgName;

    /**
     * @todo Write general description for this property
     * @maps Address
     * @var string|null $address public property
     */
    public $address;

    /**
     * @todo Write general description for this property
     * @maps PostalCode
     * @var string|null $postalCode public property
     */
    public $postalCode;

    /**
     * @todo Write general description for this property
     * @maps City
     * @var string|null $city public property
     */
    public $city;

    /**
     * @todo Write general description for this property
     * @maps IncorporationDate
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $incorporationDate public property
     */
    public $incorporationDate;

    /**
     * @todo Write general description for this property
     * @maps ChairMan
     * @var string|null $chairMan public property
     */
    public $chairMan;

    /**
     * @todo Write general description for this property
     * @maps CEO
     * @var string|null $cEO public property
     */
    public $cEO;

    /**
     * @todo Write general description for this property
     * @maps Economy
     * @var \IdfyLib\Models\Economy|null $economy public property
     */
    public $economy;

    /**
     * @todo Write general description for this property
     * @maps BisnodeRatingCode
     * @var string|null $bisnodeRatingCode public property
     */
    public $bisnodeRatingCode;

    /**
     * @todo Write general description for this property
     * @maps BisnodeRatingDescription
     * @var string|null $bisnodeRatingDescription public property
     */
    public $bisnodeRatingDescription;

    /**
     * @todo Write general description for this property
     * @maps CreditLimit
     * @var double|null $creditLimit public property
     */
    public $creditLimit;

    /**
     * @todo Write general description for this property
     * @maps PaymentDefaults
     * @var string|null $paymentDefaults public property
     */
    public $paymentDefaults;

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
     * @maps DetailedInformation
     * @var \IdfyLib\Models\HentForetakResponse|null $detailedInformation public property
     */
    public $detailedInformation;

    /**
     * @todo Write general description for this property
     * @maps NumberOfPaymentDefaults
     * @var integer|null $numberOfPaymentDefaults public property
     */
    public $numberOfPaymentDefaults;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer              $orgNumber                Initialization value for $this->orgNumber
     * @param string               $orgName                  Initialization value for $this->orgName
     * @param string               $address                  Initialization value for $this->address
     * @param string               $postalCode               Initialization value for $this->postalCode
     * @param string               $city                     Initialization value for $this->city
     * @param \DateTime            $incorporationDate        Initialization value for $this->incorporationDate
     * @param string               $chairMan                 Initialization value for $this->chairMan
     * @param string               $cEO                      Initialization value for $this->cEO
     * @param Economy              $economy                  Initialization value for $this->economy
     * @param string               $bisnodeRatingCode        Initialization value for $this->bisnodeRatingCode
     * @param string               $bisnodeRatingDescription Initialization value for $this->bisnodeRatingDescription
     * @param double               $creditLimit              Initialization value for $this->creditLimit
     * @param string               $paymentDefaults          Initialization value for $this->paymentDefaults
     * @param string               $requestId                Initialization value for $this->requestId
     * @param string               $report                   Initialization value for $this->report
     * @param HentForetakResponse  $detailedInformation      Initialization value for $this->detailedInformation
     * @param integer              $numberOfPaymentDefaults  Initialization value for $this->numberOfPaymentDefaults
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->orgNumber                = func_get_arg(0);
            $this->orgName                  = func_get_arg(1);
            $this->address                  = func_get_arg(2);
            $this->postalCode               = func_get_arg(3);
            $this->city                     = func_get_arg(4);
            $this->incorporationDate        = func_get_arg(5);
            $this->chairMan                 = func_get_arg(6);
            $this->cEO                      = func_get_arg(7);
            $this->economy                  = func_get_arg(8);
            $this->bisnodeRatingCode        = func_get_arg(9);
            $this->bisnodeRatingDescription = func_get_arg(10);
            $this->creditLimit              = func_get_arg(11);
            $this->paymentDefaults          = func_get_arg(12);
            $this->requestId                = func_get_arg(13);
            $this->report                   = func_get_arg(14);
            $this->detailedInformation      = func_get_arg(15);
            $this->numberOfPaymentDefaults  = func_get_arg(16);
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
        $json['OrgNumber']                = $this->orgNumber;
        $json['OrgName']                  = $this->orgName;
        $json['Address']                  = $this->address;
        $json['PostalCode']               = $this->postalCode;
        $json['City']                     = $this->city;
        $json['IncorporationDate']        = isset($this->incorporationDate) ?
            DateTimeHelper::toRfc3339DateTime($this->incorporationDate) : null;
        $json['ChairMan']                 = $this->chairMan;
        $json['CEO']                      = $this->cEO;
        $json['Economy']                  = $this->economy;
        $json['BisnodeRatingCode']        = $this->bisnodeRatingCode;
        $json['BisnodeRatingDescription'] = $this->bisnodeRatingDescription;
        $json['CreditLimit']              = $this->creditLimit;
        $json['PaymentDefaults']          = $this->paymentDefaults;
        $json['RequestId']                = $this->requestId;
        $json['Report']                   = $this->report;
        $json['DetailedInformation']      = $this->detailedInformation;
        $json['NumberOfPaymentDefaults']  = $this->numberOfPaymentDefaults;

        return array_merge($json, $this->additionalProperties);
    }
}
