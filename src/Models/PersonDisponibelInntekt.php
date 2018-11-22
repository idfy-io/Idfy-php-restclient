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
class PersonDisponibelInntekt implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $kodeField public property
     */
    public $kodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $beskrivelseField public property
     */
    public $beskrivelseField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $kodeField        Initialization value for $this->kodeField
     * @param string  $beskrivelseField Initialization value for $this->beskrivelseField
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->kodeField        = func_get_arg(0);
            $this->beskrivelseField = func_get_arg(1);
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
        $json['kodeField']        = $this->kodeField;
        $json['beskrivelseField'] = $this->beskrivelseField;

        return array_merge($json, $this->additionalProperties);
    }
}
