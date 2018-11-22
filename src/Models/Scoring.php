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
class Scoring implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $beslutningField public property
     */
    public $beslutningField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\ArsaksData[]|null $arsaksDataField public property
     */
    public $arsaksDataField;

    /**
     * @todo Write general description for this property
     * @var integer|null $scoreField public property
     */
    public $scoreField;

    /**
     * @todo Write general description for this property
     * @var integer|null $grenseAvslagField public property
     */
    public $grenseAvslagField;

    /**
     * @todo Write general description for this property
     * @var integer|null $grenseGodkjentField public property
     */
    public $grenseGodkjentField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $beslutningField     Initialization value for $this->beslutningField
     * @param array   $arsaksDataField     Initialization value for $this->arsaksDataField
     * @param integer $scoreField          Initialization value for $this->scoreField
     * @param integer $grenseAvslagField   Initialization value for $this->grenseAvslagField
     * @param integer $grenseGodkjentField Initialization value for $this->grenseGodkjentField
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->beslutningField     = func_get_arg(0);
            $this->arsaksDataField     = func_get_arg(1);
            $this->scoreField          = func_get_arg(2);
            $this->grenseAvslagField   = func_get_arg(3);
            $this->grenseGodkjentField = func_get_arg(4);
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
        $json['beslutningField']     = $this->beslutningField;
        $json['arsaksDataField']     = $this->arsaksDataField;
        $json['scoreField']          = $this->scoreField;
        $json['grenseAvslagField']   = $this->grenseAvslagField;
        $json['grenseGodkjentField'] = $this->grenseGodkjentField;

        return array_merge($json, $this->additionalProperties);
    }
}
