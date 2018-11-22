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
class Authentication implements JsonSerializable
{
    /**
     * If this is set to true, you have to include the social security number or SignatureMethod unique id
     * for the signer
     * @var bool|null $authBeforeSign public property
     */
    public $authBeforeSign;

    /**
     * The signers social security number
     * @var string|null $socialSecurityNumber public property
     */
    public $socialSecurityNumber;

    /**
     * Define this if you have the signers unique signaturemethod id (i.e. the norwegian bankid pid). Only
     * the person supposed to sign the document will then be allowed to sign it.
     * @var string|null $signatureMethodUniqueId public property
     */
    public $signatureMethodUniqueId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $authBeforeSign          Initialization value for $this->authBeforeSign
     * @param string $socialSecurityNumber    Initialization value for $this->socialSecurityNumber
     * @param string $signatureMethodUniqueId Initialization value for $this->signatureMethodUniqueId
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->authBeforeSign          = func_get_arg(0);
            $this->socialSecurityNumber    = func_get_arg(1);
            $this->signatureMethodUniqueId = func_get_arg(2);
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
        $json['authBeforeSign']          = $this->authBeforeSign;
        $json['socialSecurityNumber']    = $this->socialSecurityNumber;
        $json['signatureMethodUniqueId'] = $this->signatureMethodUniqueId;

        return array_merge($json, $this->additionalProperties);
    }
}
