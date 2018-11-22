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
class ParseSDOResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * Reference to audit log
     * @var string|null $auditId public property
     */
    public $auditId;

    /**
     * Is the signatures valid
     * @var bool|null $signersValid public property
     */
    public $signersValid;

    /**
     * Is the sealing of the SDO valid
     * @var \IdfyLib\Models\Seal|null $seal public property
     */
    public $seal;

    /**
     * Signers list
     * @var \IdfyLib\Models\SDOSigners[]|null $signers public property
     */
    public $signers;

    /**
     * Summary
     * @var string|null $summary public property
     */
    public $summary;

    /**
     * Error messages
     * @var \IdfyLib\Models\ValidationError|null $validationError public property
     */
    public $validationError;

    /**
     * Original data from document (base64 string)
     * @var string|null $signedData public property
     */
    public $signedData;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $requestId       Initialization value for $this->requestId
     * @param string          $auditId         Initialization value for $this->auditId
     * @param bool            $signersValid    Initialization value for $this->signersValid
     * @param Seal            $seal            Initialization value for $this->seal
     * @param array           $signers         Initialization value for $this->signers
     * @param string          $summary         Initialization value for $this->summary
     * @param ValidationError $validationError Initialization value for $this->validationError
     * @param string          $signedData      Initialization value for $this->signedData
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->requestId       = func_get_arg(0);
            $this->auditId         = func_get_arg(1);
            $this->signersValid    = func_get_arg(2);
            $this->seal            = func_get_arg(3);
            $this->signers         = func_get_arg(4);
            $this->summary         = func_get_arg(5);
            $this->validationError = func_get_arg(6);
            $this->signedData      = func_get_arg(7);
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
        $json['auditId']         = $this->auditId;
        $json['signersValid']    = $this->signersValid;
        $json['seal']            = $this->seal;
        $json['signers']         = $this->signers;
        $json['summary']         = $this->summary;
        $json['validationError'] = $this->validationError;
        $json['signedData']      = $this->signedData;

        return array_merge($json, $this->additionalProperties);
    }
}
