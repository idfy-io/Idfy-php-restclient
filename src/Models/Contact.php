<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Company contact person
 */
class Contact implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Mobile
     * @var string $mobile public property
     */
    public $mobile;

    /**
     * @todo Write general description for this property
     * @required
     * @maps Email
     * @var string $email public property
     */
    public $email;

    /**
     * @todo Write general description for this property
     * @maps Phone
     * @var string|null $phone public property
     */
    public $phone;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name   Initialization value for $this->name
     * @param string $mobile Initialization value for $this->mobile
     * @param string $email  Initialization value for $this->email
     * @param string $phone  Initialization value for $this->phone
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->name   = func_get_arg(0);
            $this->mobile = func_get_arg(1);
            $this->email  = func_get_arg(2);
            $this->phone  = func_get_arg(3);
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
        $json['Name']   = $this->name;
        $json['Mobile'] = $this->mobile;
        $json['Email']  = $this->email;
        $json['Phone']  = $this->phone;

        return array_merge($json, $this->additionalProperties);
    }
}
