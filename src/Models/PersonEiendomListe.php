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
class PersonEiendomListe implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $kommunenrField public property
     */
    public $kommunenrField;

    /**
     * @todo Write general description for this property
     * @var string|null $kommuneNavnField public property
     */
    public $kommuneNavnField;

    /**
     * @todo Write general description for this property
     * @var integer|null $gardnrField public property
     */
    public $gardnrField;

    /**
     * @todo Write general description for this property
     * @var integer|null $bruksnrField public property
     */
    public $bruksnrField;

    /**
     * @todo Write general description for this property
     * @var integer|null $festenrField public property
     */
    public $festenrField;

    /**
     * @todo Write general description for this property
     * @var integer|null $seksjonsnrField public property
     */
    public $seksjonsnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $typeField public property
     */
    public $typeField;

    /**
     * @todo Write general description for this property
     * @var string|null $andelField public property
     */
    public $andelField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $kommunenrField   Initialization value for $this->kommunenrField
     * @param string  $kommuneNavnField Initialization value for $this->kommuneNavnField
     * @param integer $gardnrField      Initialization value for $this->gardnrField
     * @param integer $bruksnrField     Initialization value for $this->bruksnrField
     * @param integer $festenrField     Initialization value for $this->festenrField
     * @param integer $seksjonsnrField  Initialization value for $this->seksjonsnrField
     * @param string  $typeField        Initialization value for $this->typeField
     * @param string  $andelField       Initialization value for $this->andelField
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->kommunenrField   = func_get_arg(0);
            $this->kommuneNavnField = func_get_arg(1);
            $this->gardnrField      = func_get_arg(2);
            $this->bruksnrField     = func_get_arg(3);
            $this->festenrField     = func_get_arg(4);
            $this->seksjonsnrField  = func_get_arg(5);
            $this->typeField        = func_get_arg(6);
            $this->andelField       = func_get_arg(7);
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
        $json['kommunenrField']   = $this->kommunenrField;
        $json['kommuneNavnField'] = $this->kommuneNavnField;
        $json['gardnrField']      = $this->gardnrField;
        $json['bruksnrField']     = $this->bruksnrField;
        $json['festenrField']     = $this->festenrField;
        $json['seksjonsnrField']  = $this->seksjonsnrField;
        $json['typeField']        = $this->typeField;
        $json['andelField']       = $this->andelField;

        return array_merge($json, $this->additionalProperties);
    }
}
