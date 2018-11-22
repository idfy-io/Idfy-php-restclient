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
class SignatureType implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $mechanism public property
     */
    public $mechanism;

    /**
     * Define which signature methods the signer are allowed to sign the document with, if empty all
     * available methods for the account will be displayed to the user
     * @var array|null $signatureMethods public property
     */
    public $signatureMethods;

    /**
     * @todo Write general description for this property
     * @var bool|null $onEacceptUseHandWrittenSignature public property
     */
    public $onEacceptUseHandWrittenSignature;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $mechanism                        Initialization value for $this->mechanism
     * @param array  $signatureMethods                 Initialization value for $this->signatureMethods
     * @param bool   $onEacceptUseHandWrittenSignature Initialization value for $this-
     *                                                   >onEacceptUseHandWrittenSignature
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->mechanism                        = func_get_arg(0);
            $this->signatureMethods                 = func_get_arg(1);
            $this->onEacceptUseHandWrittenSignature = func_get_arg(2);
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
        $json['mechanism']                        = $this->mechanism;
        $json['signatureMethods']                 = $this->signatureMethods;
        $json['onEacceptUseHandWrittenSignature'] = $this->onEacceptUseHandWrittenSignature;

        return array_merge($json, $this->additionalProperties);
    }
}
