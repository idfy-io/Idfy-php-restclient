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
class Dialogs implements JsonSerializable
{
    /**
     * Will be presented before the document is signed
     * @var \IdfyLib\Models\DialogBefore|null $before public property
     */
    public $before;

    /**
     * Will be presented after the document is signed
     * @var \IdfyLib\Models\Dialog|null $after public property
     */
    public $after;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param DialogBefore $before Initialization value for $this->before
     * @param Dialog       $after  Initialization value for $this->after
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->before = func_get_arg(0);
            $this->after  = func_get_arg(1);
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
        $json['before'] = $this->before;
        $json['after']  = $this->after;

        return array_merge($json, $this->additionalProperties);
    }
}
