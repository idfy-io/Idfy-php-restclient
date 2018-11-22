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
class MerchantSignRequest implements JsonSerializable
{
    /**
     * Base 64 encoded data
     * @required
     * @var string $dataToSign public property
     */
    public $dataToSign;

    /**
     * Format of data (i.e xml)
     * @required
     * @var string $dataFormat public property
     */
    public $dataFormat;

    /**
     * The service reference for the signing. Will be used for auditlog, and invoicing
     * @required
     * @var string $externalReference public property
     */
    public $externalReference;

    /**
     * Base 64 encoded xslt (optional)
     * @var string|null $xslt public property
     */
    public $xslt;

    /**
     * Optional, if not set the default setting for the account will be used
     * @var string|null $signingFormat public property
     */
    public $signingFormat;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $dataToSign        Initialization value for $this->dataToSign
     * @param string $dataFormat        Initialization value for $this->dataFormat
     * @param string $externalReference Initialization value for $this->externalReference
     * @param string $xslt              Initialization value for $this->xslt
     * @param string $signingFormat     Initialization value for $this->signingFormat
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->dataToSign        = func_get_arg(0);
            $this->dataFormat        = func_get_arg(1);
            $this->externalReference = func_get_arg(2);
            $this->xslt              = func_get_arg(3);
            $this->signingFormat     = func_get_arg(4);
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
        $json['dataToSign']        = $this->dataToSign;
        $json['dataFormat']        = $this->dataFormat;
        $json['externalReference'] = $this->externalReference;
        $json['xslt']              = $this->xslt;
        $json['signingFormat']     = $this->signingFormat;

        return array_merge($json, $this->additionalProperties);
    }
}
