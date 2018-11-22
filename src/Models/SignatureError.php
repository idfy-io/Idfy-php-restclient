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
class SignatureError implements JsonSerializable
{
    /**
     * Idfy error message
     * @var string|null $errorMessage public property
     */
    public $errorMessage;

    /**
     * Idfy error code
     * @var string|null $errorCode public property
     */
    public $errorCode;

    /**
     * Eid provider error message
     * @var string|null $eidErrorMessage public property
     */
    public $eidErrorMessage;

    /**
     * Eid provider error code
     * @var string|null $eidErrorCode public property
     */
    public $eidErrorCode;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $errorMessage    Initialization value for $this->errorMessage
     * @param string $errorCode       Initialization value for $this->errorCode
     * @param string $eidErrorMessage Initialization value for $this->eidErrorMessage
     * @param string $eidErrorCode    Initialization value for $this->eidErrorCode
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->errorMessage    = func_get_arg(0);
            $this->errorCode       = func_get_arg(1);
            $this->eidErrorMessage = func_get_arg(2);
            $this->eidErrorCode    = func_get_arg(3);
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
        $json['errorMessage']    = $this->errorMessage;
        $json['errorCode']       = $this->errorCode;
        $json['eidErrorMessage'] = $this->eidErrorMessage;
        $json['eidErrorCode']    = $this->eidErrorCode;

        return array_merge($json, $this->additionalProperties);
    }
}
