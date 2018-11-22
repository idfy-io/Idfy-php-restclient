<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Error details information
 */
class Error implements JsonSerializable
{
    /**
     * The error code from the Identity provider
     * @maps NativeErrorCode
     * @var string|null $nativeErrorCode public property
     */
    public $nativeErrorCode;

    /**
     * The error code for the error
     * @maps ErrorCode
     * @var string|null $errorCode public property
     */
    public $errorCode;

    /**
     * Error message
     * @maps ErrorMessage
     * @var string|null $errorMessage public property
     */
    public $errorMessage;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $nativeErrorCode Initialization value for $this->nativeErrorCode
     * @param string $errorCode       Initialization value for $this->errorCode
     * @param string $errorMessage    Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->nativeErrorCode = func_get_arg(0);
            $this->errorCode       = func_get_arg(1);
            $this->errorMessage    = func_get_arg(2);
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
        $json['NativeErrorCode'] = $this->nativeErrorCode;
        $json['ErrorCode']       = $this->errorCode;
        $json['ErrorMessage']    = $this->errorMessage;

        return array_merge($json, $this->additionalProperties);
    }
}
