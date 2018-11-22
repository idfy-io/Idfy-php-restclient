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
class TemplateWithIdPreview implements JsonSerializable
{
    /**
     * Primary language to use in the preview (required)
     * @required
     * @maps PrimaryLanguage
     * @var string $primaryLanguage public property
     */
    public $primaryLanguage;

    /**
     * Secondary language to use in the prewview (optional)
     * @maps SecondaryLanguage
     * @var string|null $secondaryLanguage public property
     */
    public $secondaryLanguage;

    /**
     * Xml package signature in base64 encoding
     * @maps XmlSignature
     * @var string|null $xmlSignature public property
     */
    public $xmlSignature;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $primaryLanguage   Initialization value for $this->primaryLanguage
     * @param string $secondaryLanguage Initialization value for $this->secondaryLanguage
     * @param string $xmlSignature      Initialization value for $this->xmlSignature
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->primaryLanguage   = func_get_arg(0);
            $this->secondaryLanguage = func_get_arg(1);
            $this->xmlSignature      = func_get_arg(2);
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
        $json['PrimaryLanguage']   = $this->primaryLanguage;
        $json['SecondaryLanguage'] = $this->secondaryLanguage;
        $json['XmlSignature']      = $this->xmlSignature;

        return array_merge($json, $this->additionalProperties);
    }
}
