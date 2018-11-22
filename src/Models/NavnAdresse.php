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
class NavnAdresse implements JsonSerializable
{
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
     * @var string|null $gateAdresseField public property
     */
    public $gateAdresseField;

    /**
     * @todo Write general description for this property
     * @var integer|null $gatePostboksField public property
     */
    public $gatePostboksField;

    /**
     * @todo Write general description for this property
     * @var integer|null $gatePostnrField public property
     */
    public $gatePostnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $gatePoststedField public property
     */
    public $gatePoststedField;

    /**
     * @todo Write general description for this property
     * @var string|null $postAdresseField public property
     */
    public $postAdresseField;

    /**
     * @todo Write general description for this property
     * @var integer|null $postPostboksField public property
     */
    public $postPostboksField;

    /**
     * @todo Write general description for this property
     * @var integer|null $postPostnrField public property
     */
    public $postPostnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $postPoststedField public property
     */
    public $postPoststedField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $kodeTypeField     Initialization value for $this->kodeTypeField
     * @param string  $kodeTekstField    Initialization value for $this->kodeTekstField
     * @param string  $navnField         Initialization value for $this->navnField
     * @param string  $gateAdresseField  Initialization value for $this->gateAdresseField
     * @param integer $gatePostboksField Initialization value for $this->gatePostboksField
     * @param integer $gatePostnrField   Initialization value for $this->gatePostnrField
     * @param string  $gatePoststedField Initialization value for $this->gatePoststedField
     * @param string  $postAdresseField  Initialization value for $this->postAdresseField
     * @param integer $postPostboksField Initialization value for $this->postPostboksField
     * @param integer $postPostnrField   Initialization value for $this->postPostnrField
     * @param string  $postPoststedField Initialization value for $this->postPoststedField
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->kodeTypeField     = func_get_arg(0);
            $this->kodeTekstField    = func_get_arg(1);
            $this->navnField         = func_get_arg(2);
            $this->gateAdresseField  = func_get_arg(3);
            $this->gatePostboksField = func_get_arg(4);
            $this->gatePostnrField   = func_get_arg(5);
            $this->gatePoststedField = func_get_arg(6);
            $this->postAdresseField  = func_get_arg(7);
            $this->postPostboksField = func_get_arg(8);
            $this->postPostnrField   = func_get_arg(9);
            $this->postPoststedField = func_get_arg(10);
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
        $json['kodeTypeField']     = $this->kodeTypeField;
        $json['kodeTekstField']    = $this->kodeTekstField;
        $json['navnField']         = $this->navnField;
        $json['gateAdresseField']  = $this->gateAdresseField;
        $json['gatePostboksField'] = $this->gatePostboksField;
        $json['gatePostnrField']   = $this->gatePostnrField;
        $json['gatePoststedField'] = $this->gatePoststedField;
        $json['postAdresseField']  = $this->postAdresseField;
        $json['postPostboksField'] = $this->postPostboksField;
        $json['postPostnrField']   = $this->postPostnrField;
        $json['postPoststedField'] = $this->postPoststedField;

        return array_merge($json, $this->additionalProperties);
    }
}
