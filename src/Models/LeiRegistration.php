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
class LeiRegistration implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps InitialRegistrationDate
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $initialRegistrationDate public property
     */
    public $initialRegistrationDate;

    /**
     * @todo Write general description for this property
     * @maps RegistrationStatus
     * @var string|null $registrationStatus public property
     */
    public $registrationStatus;

    /**
     * @todo Write general description for this property
     * @maps ValidationSources
     * @var string|null $validationSources public property
     */
    public $validationSources;

    /**
     * @todo Write general description for this property
     * @maps LastUpdateDate
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastUpdateDate public property
     */
    public $lastUpdateDate;

    /**
     * @todo Write general description for this property
     * @maps NextRenewalDate
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $nextRenewalDate public property
     */
    public $nextRenewalDate;

    /**
     * @todo Write general description for this property
     * @maps ManagingLou
     * @var \IdfyLib\Models\ManagingLou|null $managingLou public property
     */
    public $managingLou;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime    $initialRegistrationDate Initialization value for $this->initialRegistrationDate
     * @param string       $registrationStatus      Initialization value for $this->registrationStatus
     * @param string       $validationSources       Initialization value for $this->validationSources
     * @param \DateTime    $lastUpdateDate          Initialization value for $this->lastUpdateDate
     * @param \DateTime    $nextRenewalDate         Initialization value for $this->nextRenewalDate
     * @param ManagingLou  $managingLou             Initialization value for $this->managingLou
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->initialRegistrationDate = func_get_arg(0);
            $this->registrationStatus      = func_get_arg(1);
            $this->validationSources       = func_get_arg(2);
            $this->lastUpdateDate          = func_get_arg(3);
            $this->nextRenewalDate         = func_get_arg(4);
            $this->managingLou             = func_get_arg(5);
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
        $json['InitialRegistrationDate'] = isset($this->initialRegistrationDate) ?
            DateTimeHelper::toRfc3339DateTime($this->initialRegistrationDate) : null;
        $json['RegistrationStatus']      = $this->registrationStatus;
        $json['ValidationSources']       = $this->validationSources;
        $json['LastUpdateDate']          = isset($this->lastUpdateDate) ?
            DateTimeHelper::toRfc3339DateTime($this->lastUpdateDate) : null;
        $json['NextRenewalDate']         = isset($this->nextRenewalDate) ?
            DateTimeHelper::toRfc3339DateTime($this->nextRenewalDate) : null;
        $json['ManagingLou']             = $this->managingLou;

        return array_merge($json, $this->additionalProperties);
    }
}
