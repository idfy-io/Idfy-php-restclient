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
class Styling implements JsonSerializable
{
    /**
     * Sets color theme for the application
     * @var string|null $colorTheme public property
     */
    public $colorTheme;

    /**
     * Set the type of spinner to show in loading screens
     * @var string|null $spinner public property
     */
    public $spinner;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $colorTheme Initialization value for $this->colorTheme
     * @param string $spinner    Initialization value for $this->spinner
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->colorTheme = func_get_arg(0);
            $this->spinner    = func_get_arg(1);
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
        $json['colorTheme'] = $this->colorTheme;
        $json['spinner']    = $this->spinner;

        return array_merge($json, $this->additionalProperties);
    }
}
