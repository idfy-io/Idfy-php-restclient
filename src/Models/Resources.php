<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Logo / Styling
 */
class Resources implements JsonSerializable
{
    /**
     * The logo uploaded to this account
     * @maps LogoUrl
     * @var string|null $logoUrl public property
     */
    public $logoUrl;

    /**
     * Custom css uploaded to this account
     * @maps CssUrl
     * @var string|null $cssUrl public property
     */
    public $cssUrl;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $logoUrl Initialization value for $this->logoUrl
     * @param string $cssUrl  Initialization value for $this->cssUrl
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->logoUrl = func_get_arg(0);
            $this->cssUrl  = func_get_arg(1);
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
        $json['LogoUrl'] = $this->logoUrl;
        $json['CssUrl']  = $this->cssUrl;

        return array_merge($json, $this->additionalProperties);
    }
}
