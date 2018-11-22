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
class PersonAmlResponse implements JsonSerializable
{
    /**
     * Reference identifying the current request. May be used for tracing
     * @var string|null $bisnodeReference public property
     */
    public $bisnodeReference;

    /**
     * List of all Sanction items with match for the input request.
     * @var \IdfyLib\Models\PersonSanctionResult[]|null $sanctionResults public property
     */
    public $sanctionResults;

    /**
     * List of all PEP items with match for the input request.
     * @var \IdfyLib\Models\PepResult[]|null $pepResults public property
     */
    public $pepResults;

    /**
     * Data retrieved before the actual screening (data enhancement).
     * @var \IdfyLib\Models\VerifiedPerson|null $verifiedPerson public property
     */
    public $verifiedPerson;

    /**
     * Response message could for example be: No result from PEP and/or SANCTION screening.
     * @var string|null $message public property
     */
    public $message;

    /**
     * Reference to downloadable PDF report (if includeReport is set to true in request)
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
     * @param string         $bisnodeReference Initialization value for $this->bisnodeReference
     * @param array          $sanctionResults  Initialization value for $this->sanctionResults
     * @param array          $pepResults       Initialization value for $this->pepResults
     * @param VerifiedPerson $verifiedPerson   Initialization value for $this->verifiedPerson
     * @param string         $message          Initialization value for $this->message
     * @param string         $report           Initialization value for $this->report
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->bisnodeReference = func_get_arg(0);
            $this->sanctionResults  = func_get_arg(1);
            $this->pepResults       = func_get_arg(2);
            $this->verifiedPerson   = func_get_arg(3);
            $this->message          = func_get_arg(4);
            $this->report           = func_get_arg(5);
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
        $json['sanctionResults']  = $this->sanctionResults;
        $json['pepResults']       = $this->pepResults;
        $json['verifiedPerson']   = $this->verifiedPerson;
        $json['message']          = $this->message;
        $json['Report']           = $this->report;

        return array_merge($json, $this->additionalProperties);
    }
}
