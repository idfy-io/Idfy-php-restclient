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
class Datterselskap implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrField public property
     */
    public $orgnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $kodeTypeField public property
     */
    public $kodeTypeField;

    /**
     * @todo Write general description for this property
     * @var string|null $kodeTekstField public property
     */
    public $kodeTekstField;

    /**
     * @todo Write general description for this property
     * @var string|null $navnField public property
     */
    public $navnField;

    /**
     * @todo Write general description for this property
     * @var integer|null $postnrField public property
     */
    public $postnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $poststedField public property
     */
    public $poststedField;

    /**
     * @todo Write general description for this property
     * @var double|null $eierandelField public property
     */
    public $eierandelField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $orgnrField     Initialization value for $this->orgnrField
     * @param string  $kodeTypeField  Initialization value for $this->kodeTypeField
     * @param string  $kodeTekstField Initialization value for $this->kodeTekstField
     * @param string  $navnField      Initialization value for $this->navnField
     * @param integer $postnrField    Initialization value for $this->postnrField
     * @param string  $poststedField  Initialization value for $this->poststedField
     * @param double  $eierandelField Initialization value for $this->eierandelField
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->orgnrField     = func_get_arg(0);
            $this->kodeTypeField  = func_get_arg(1);
            $this->kodeTekstField = func_get_arg(2);
            $this->navnField      = func_get_arg(3);
            $this->postnrField    = func_get_arg(4);
            $this->poststedField  = func_get_arg(5);
            $this->eierandelField = func_get_arg(6);
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
        $json['orgnrField']     = $this->orgnrField;
        $json['kodeTypeField']  = $this->kodeTypeField;
        $json['kodeTekstField'] = $this->kodeTekstField;
        $json['navnField']      = $this->navnField;
        $json['postnrField']    = $this->postnrField;
        $json['poststedField']  = $this->poststedField;
        $json['eierandelField'] = $this->eierandelField;

        return array_merge($json, $this->additionalProperties);
    }
}
