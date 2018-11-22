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
class SMS implements JsonSerializable
{
    /**
     * Sms language
     * @required
     * @var string $language public property
     */
    public $language;

    /**
     * Sms text
     * @var string|null $text public property
     */
    public $text;

    /**
     * Sender name
     * @var string|null $sender public property
     */
    public $sender;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $language Initialization value for $this->language
     * @param string $text     Initialization value for $this->text
     * @param string $sender   Initialization value for $this->sender
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->language = func_get_arg(0);
            $this->text     = func_get_arg(1);
            $this->sender   = func_get_arg(2);
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
        $json['language'] = $this->language;
        $json['text']     = $this->text;
        $json['sender']   = $this->sender;

        return array_merge($json, $this->additionalProperties);
    }
}
