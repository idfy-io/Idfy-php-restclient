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
class ValidateSDOResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * Is the SDO valid
     * @var bool|null $valid public property
     */
    public $valid;

    /**
     * Is the Seal of the SDO valid
     * @var \IdfyLib\Models\Seal|null $seal public property
     */
    public $seal;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\ValidatedSigners[]|null $signers public property
     */
    public $signers;

    /**
     * @todo Write general description for this property
     * @var string|null $summary public property
     */
    public $summary;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\ValidationError|null $validationError public property
     */
    public $validationError;

    /**
     * The AuditId vil only be set for users with an account on the API.
     * @var string|null $auditId public property
     */
    public $auditId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $requestId       Initialization value for $this->requestId
     * @param bool            $valid           Initialization value for $this->valid
     * @param Seal            $seal            Initialization value for $this->seal
     * @param array           $signers         Initialization value for $this->signers
     * @param string          $summary         Initialization value for $this->summary
     * @param ValidationError $validationError Initialization value for $this->validationError
     * @param string          $auditId         Initialization value for $this->auditId
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->requestId       = func_get_arg(0);
            $this->valid           = func_get_arg(1);
            $this->seal            = func_get_arg(2);
            $this->signers         = func_get_arg(3);
            $this->summary         = func_get_arg(4);
            $this->validationError = func_get_arg(5);
            $this->auditId         = func_get_arg(6);
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
        $json['requestId']       = $this->requestId;
        $json['valid']           = $this->valid;
        $json['seal']            = $this->seal;
        $json['signers']         = $this->signers;
        $json['summary']         = $this->summary;
        $json['validationError'] = $this->validationError;
        $json['auditId']         = $this->auditId;

        return array_merge($json, $this->additionalProperties);
    }
}
