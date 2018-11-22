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
class CompanyAmlResponse implements JsonSerializable
{
    /**
     * Reference identifying the current request. May be used for tracing
     * @var string|null $bisnodeReference public property
     */
    public $bisnodeReference;

    /**
     * Data retrieved before the actual screening (data enhancement).
     * @var \IdfyLib\Models\VerifiedCompany|null $verifiedCompany public property
     */
    public $verifiedCompany;

    /**
     * List of all Sanction items with match for the input request.
     * @var \IdfyLib\Models\CompanySanctionResult[]|null $sanctionResults public property
     */
    public $sanctionResults;

    /**
     * Response message could for example be: No result from PEP and/or SANCTION screening.
     * @var string|null $message public property
     */
    public $message;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $bisnodeReference Initialization value for $this->bisnodeReference
     * @param VerifiedCompany $verifiedCompany  Initialization value for $this->verifiedCompany
     * @param array           $sanctionResults  Initialization value for $this->sanctionResults
     * @param string          $message          Initialization value for $this->message
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->bisnodeReference = func_get_arg(0);
            $this->verifiedCompany  = func_get_arg(1);
            $this->sanctionResults  = func_get_arg(2);
            $this->message          = func_get_arg(3);
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
        $json['bisnodeReference'] = $this->bisnodeReference;
        $json['verifiedCompany']  = $this->verifiedCompany;
        $json['sanctionResults']  = $this->sanctionResults;
        $json['message']          = $this->message;

        return array_merge($json, $this->additionalProperties);
    }
}
