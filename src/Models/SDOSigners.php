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
class SDOSigners implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Certificate|null $certificate public property
     */
    public $certificate;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * @todo Write general description for this property
     * @var string|null $pid public property
     */
    public $pid;

    /**
     * @todo Write general description for this property
     * @var string|null $ssn public property
     */
    public $ssn;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $signedTimestamp public property
     */
    public $signedTimestamp;

    /**
     * @todo Write general description for this property
     * @var bool|null $valid public property
     */
    public $valid;

    /**
     * @todo Write general description for this property
     * @var string|null $ocsp public property
     */
    public $ocsp;

    /**
     * @todo Write general description for this property
     * @var string|null $environment public property
     */
    public $environment;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param Certificate  $certificate     Initialization value for $this->certificate
     * @param string       $name            Initialization value for $this->name
     * @param \DateTime    $dateOfBirth     Initialization value for $this->dateOfBirth
     * @param string       $pid             Initialization value for $this->pid
     * @param string       $ssn             Initialization value for $this->ssn
     * @param \DateTime    $signedTimestamp Initialization value for $this->signedTimestamp
     * @param bool         $valid           Initialization value for $this->valid
     * @param string       $ocsp            Initialization value for $this->ocsp
     * @param string       $environment     Initialization value for $this->environment
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->certificate     = func_get_arg(0);
            $this->name            = func_get_arg(1);
            $this->dateOfBirth     = func_get_arg(2);
            $this->pid             = func_get_arg(3);
            $this->ssn             = func_get_arg(4);
            $this->signedTimestamp = func_get_arg(5);
            $this->valid           = func_get_arg(6);
            $this->ocsp            = func_get_arg(7);
            $this->environment     = func_get_arg(8);
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
        $json['certificate']     = $this->certificate;
        $json['name']            = $this->name;
        $json['dateOfBirth']     = isset($this->dateOfBirth) ?
            DateTimeHelper::toRfc3339DateTime($this->dateOfBirth) : null;
        $json['pid']             = $this->pid;
        $json['ssn']             = $this->ssn;
        $json['signedTimestamp'] = isset($this->signedTimestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->signedTimestamp) : null;
        $json['valid']           = $this->valid;
        $json['ocsp']            = $this->ocsp;
        $json['environment']     = $this->environment;

        return array_merge($json, $this->additionalProperties);
    }
}
