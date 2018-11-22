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
class SignatureRights implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps MvaNumber
     * @var integer|null $mvaNumber public property
     */
    public $mvaNumber;

    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps Signatur
     * @var \IdfyLib\Models\SignatureObject|null $signatur public property
     */
    public $signatur;

    /**
     * @todo Write general description for this property
     * @maps Prokura
     * @var \IdfyLib\Models\SignatureObject|null $prokura public property
     */
    public $prokura;

    /**
     * @todo Write general description for this property
     * @maps Report
     * @var string|null $report public property
     */
    public $report;

    /**
     * @todo Write general description for this property
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * @todo Write general description for this property
     * @maps ReportId
     * @var string|null $reportId public property
     */
    public $reportId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer         $mvaNumber Initialization value for $this->mvaNumber
     * @param string          $name      Initialization value for $this->name
     * @param SignatureObject $signatur  Initialization value for $this->signatur
     * @param SignatureObject $prokura   Initialization value for $this->prokura
     * @param string          $report    Initialization value for $this->report
     * @param string          $requestId Initialization value for $this->requestId
     * @param string          $reportId  Initialization value for $this->reportId
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->mvaNumber = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->signatur  = func_get_arg(2);
            $this->prokura   = func_get_arg(3);
            $this->report    = func_get_arg(4);
            $this->requestId = func_get_arg(5);
            $this->reportId  = func_get_arg(6);
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
        $json['Name']      = $this->name;
        $json['Signatur']  = $this->signatur;
        $json['Prokura']   = $this->prokura;
        $json['Report']    = $this->report;
        $json['RequestId'] = $this->requestId;
        $json['ReportId']  = $this->reportId;

        return array_merge($json, $this->additionalProperties);
    }
}
