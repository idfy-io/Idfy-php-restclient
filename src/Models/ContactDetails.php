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
class ContactDetails implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @var string|null $phone public property
     */
    public $phone;

    /**
     * @todo Write general description for this property
     * @var string|null $url public property
     */
    public $url;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $email Initialization value for $this->email
     * @param string $name  Initialization value for $this->name
     * @param string $phone Initialization value for $this->phone
     * @param string $url   Initialization value for $this->url
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->email = func_get_arg(0);
            $this->name  = func_get_arg(1);
            $this->phone = func_get_arg(2);
            $this->url   = func_get_arg(3);
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
        $json['email'] = $this->email;
        $json['name']  = $this->name;
        $json['phone'] = $this->phone;
        $json['url']   = $this->url;

        return array_merge($json, $this->additionalProperties);
    }
}
