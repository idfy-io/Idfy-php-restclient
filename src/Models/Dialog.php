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
class Dialog implements JsonSerializable
{
    /**
     * The dialog title
     * @var string|null $title public property
     */
    public $title;

    /**
     * The dialog text
     * @var string|null $message public property
     */
    public $message;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $title   Initialization value for $this->title
     * @param string $message Initialization value for $this->message
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->title   = func_get_arg(0);
            $this->message = func_get_arg(1);
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
        $json['title']   = $this->title;
        $json['message'] = $this->message;

        return array_merge($json, $this->additionalProperties);
    }
}
