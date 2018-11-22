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
class KonsernLink implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrOversteMorField public property
     */
    public $orgnrOversteMorField;

    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrNaermesteMorField public property
     */
    public $orgnrNaermesteMorField;

    /**
     * @todo Write general description for this property
     * @var integer|null $lopenrField public property
     */
    public $lopenrField;

    /**
     * @todo Write general description for this property
     * @var integer|null $nivaDeltagendeField public property
     */
    public $nivaDeltagendeField;

    /**
     * @todo Write general description for this property
     * @var string|null $landkodeDeltagendeField public property
     */
    public $landkodeDeltagendeField;

    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrDeltagendeField public property
     */
    public $orgnrDeltagendeField;

    /**
     * @todo Write general description for this property
     * @var string|null $navnDeltagendeField public property
     */
    public $navnDeltagendeField;

    /**
     * @todo Write general description for this property
     * @var double|null $eierandelDeltagendeField public property
     */
    public $eierandelDeltagendeField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $orgnrOversteMorField     Initialization value for $this->orgnrOversteMorField
     * @param integer $orgnrNaermesteMorField   Initialization value for $this->orgnrNaermesteMorField
     * @param integer $lopenrField              Initialization value for $this->lopenrField
     * @param integer $nivaDeltagendeField      Initialization value for $this->nivaDeltagendeField
     * @param string  $landkodeDeltagendeField  Initialization value for $this->landkodeDeltagendeField
     * @param integer $orgnrDeltagendeField     Initialization value for $this->orgnrDeltagendeField
     * @param string  $navnDeltagendeField      Initialization value for $this->navnDeltagendeField
     * @param double  $eierandelDeltagendeField Initialization value for $this->eierandelDeltagendeField
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->orgnrOversteMorField     = func_get_arg(0);
            $this->orgnrNaermesteMorField   = func_get_arg(1);
            $this->lopenrField              = func_get_arg(2);
            $this->nivaDeltagendeField      = func_get_arg(3);
            $this->landkodeDeltagendeField  = func_get_arg(4);
            $this->orgnrDeltagendeField     = func_get_arg(5);
            $this->navnDeltagendeField      = func_get_arg(6);
            $this->eierandelDeltagendeField = func_get_arg(7);
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
        $json['orgnrOversteMorField']     = $this->orgnrOversteMorField;
        $json['orgnrNaermesteMorField']   = $this->orgnrNaermesteMorField;
        $json['lopenrField']              = $this->lopenrField;
        $json['nivaDeltagendeField']      = $this->nivaDeltagendeField;
        $json['landkodeDeltagendeField']  = $this->landkodeDeltagendeField;
        $json['orgnrDeltagendeField']     = $this->orgnrDeltagendeField;
        $json['navnDeltagendeField']      = $this->navnDeltagendeField;
        $json['eierandelDeltagendeField'] = $this->eierandelDeltagendeField;

        return array_merge($json, $this->additionalProperties);
    }
}
