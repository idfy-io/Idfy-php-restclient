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
class LeiRecord implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Lei
     * @var string|null $lei public property
     */
    public $lei;

    /**
     * @todo Write general description for this property
     * @maps Entity
     * @var \IdfyLib\Models\LeiEntity|null $entity public property
     */
    public $entity;

    /**
     * @todo Write general description for this property
     * @maps Registration
     * @var \IdfyLib\Models\LeiRegistration|null $registration public property
     */
    public $registration;

    /**
     * @todo Write general description for this property
     * @maps Extension
     * @var \IdfyLib\Models\LeiExtension|null $extension public property
     */
    public $extension;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $lei          Initialization value for $this->lei
     * @param LeiEntity       $entity       Initialization value for $this->entity
     * @param LeiRegistration $registration Initialization value for $this->registration
     * @param LeiExtension    $extension    Initialization value for $this->extension
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->lei          = func_get_arg(0);
            $this->entity       = func_get_arg(1);
            $this->registration = func_get_arg(2);
            $this->extension    = func_get_arg(3);
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
        $json['Lei']          = $this->lei;
        $json['Entity']       = $this->entity;
        $json['Registration'] = $this->registration;
        $json['Extension']    = $this->extension;

        return array_merge($json, $this->additionalProperties);
    }
}
