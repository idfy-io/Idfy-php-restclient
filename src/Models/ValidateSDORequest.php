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
class ValidateSDORequest implements JsonSerializable
{
    /**
     * Base 64 encoded SDO (Signed document)
     * @required
     * @var string $sdoData public property
     */
    public $sdoData;

    /**
     * The service reference for the signing. Will be used for auditlog, and invoicing
     * @required
     * @var string $externalReference public property
     */
    public $externalReference;

    /**
     * Check that the original data matches the sdo data (optional, base64 encoded)
     * @var string|null $dataToValidate public property
     */
    public $dataToValidate;

    /**
     * Add signers to validate (optional)
     * @var \IdfyLib\Models\Signers[]|null $signersToValidate public property
     */
    public $signersToValidate;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $sdoData           Initialization value for $this->sdoData
     * @param string $externalReference Initialization value for $this->externalReference
     * @param string $dataToValidate    Initialization value for $this->dataToValidate
     * @param array  $signersToValidate Initialization value for $this->signersToValidate
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->sdoData           = func_get_arg(0);
            $this->externalReference = func_get_arg(1);
            $this->dataToValidate    = func_get_arg(2);
            $this->signersToValidate = func_get_arg(3);
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
        $json['sdoData']           = $this->sdoData;
        $json['externalReference'] = $this->externalReference;
        $json['dataToValidate']    = $this->dataToValidate;
        $json['signersToValidate'] = $this->signersToValidate;

        return array_merge($json, $this->additionalProperties);
    }
}
