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
class Packaging implements JsonSerializable
{
    /**
     * The format(s) that you will be able to fetch the signed document afterwards. Read more about
     * SignaturePackage format in the documentation. (The native package format is included automatically
     * (i.e. bankid sdo)
     * @var array|null $signaturePackageFormats public property
     */
    public $signaturePackageFormats;

    /**
     * If you are using pades as a signature package format you can define settings here
     * @var \IdfyLib\Models\PadesSettings|null $padesSettings public property
     */
    public $padesSettings;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array         $signaturePackageFormats Initialization value for $this->signaturePackageFormats
     * @param PadesSettings $padesSettings           Initialization value for $this->padesSettings
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->signaturePackageFormats = func_get_arg(0);
            $this->padesSettings           = func_get_arg(1);
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
        $json['signaturePackageFormats'] = $this->signaturePackageFormats;
        $json['padesSettings']           = $this->padesSettings;

        return array_merge($json, $this->additionalProperties);
    }
}
