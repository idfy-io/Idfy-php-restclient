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
class NokkeltallBransje implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $regnskapsAvArField public property
     */
    public $regnskapsAvArField;

    /**
     * @todo Write general description for this property
     * @var integer|null $regnskapsAvMndField public property
     */
    public $regnskapsAvMndField;

    /**
     * @todo Write general description for this property
     * @var double|null $overskuddsprosentField public property
     */
    public $overskuddsprosentField;

    /**
     * @todo Write general description for this property
     * @var double|null $rentedekningsgradField public property
     */
    public $rentedekningsgradField;

    /**
     * @todo Write general description for this property
     * @var double|null $totalrentabilitetField public property
     */
    public $totalrentabilitetField;

    /**
     * @todo Write general description for this property
     * @var double|null $eKRentabilitetField public property
     */
    public $eKRentabilitetField;

    /**
     * @todo Write general description for this property
     * @var double|null $langLagerfinansField public property
     */
    public $langLagerfinansField;

    /**
     * @todo Write general description for this property
     * @var double|null $gjennomsnittLagerField public property
     */
    public $gjennomsnittLagerField;

    /**
     * @todo Write general description for this property
     * @var double|null $egenkapitalAndelField public property
     */
    public $egenkapitalAndelField;

    /**
     * @todo Write general description for this property
     * @var double|null $tapsbufferField public property
     */
    public $tapsbufferField;

    /**
     * @todo Write general description for this property
     * @var double|null $fremmedkapitalKostnadField public property
     */
    public $fremmedkapitalKostnadField;

    /**
     * @todo Write general description for this property
     * @var double|null $likviditetsgrad1Field public property
     */
    public $likviditetsgrad1Field;

    /**
     * @todo Write general description for this property
     * @var double|null $likviditetsgrad2Field public property
     */
    public $likviditetsgrad2Field;

    /**
     * @todo Write general description for this property
     * @var double|null $likviderProsentSalgField public property
     */
    public $likviderProsentSalgField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $regnskapsAvArField         Initialization value for $this->regnskapsAvArField
     * @param integer $regnskapsAvMndField        Initialization value for $this->regnskapsAvMndField
     * @param double  $overskuddsprosentField     Initialization value for $this->overskuddsprosentField
     * @param double  $rentedekningsgradField     Initialization value for $this->rentedekningsgradField
     * @param double  $totalrentabilitetField     Initialization value for $this->totalrentabilitetField
     * @param double  $eKRentabilitetField        Initialization value for $this->eKRentabilitetField
     * @param double  $langLagerfinansField       Initialization value for $this->langLagerfinansField
     * @param double  $gjennomsnittLagerField     Initialization value for $this->gjennomsnittLagerField
     * @param double  $egenkapitalAndelField      Initialization value for $this->egenkapitalAndelField
     * @param double  $tapsbufferField            Initialization value for $this->tapsbufferField
     * @param double  $fremmedkapitalKostnadField Initialization value for $this->fremmedkapitalKostnadField
     * @param double  $likviditetsgrad1Field      Initialization value for $this->likviditetsgrad1Field
     * @param double  $likviditetsgrad2Field      Initialization value for $this->likviditetsgrad2Field
     * @param double  $likviderProsentSalgField   Initialization value for $this->likviderProsentSalgField
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->regnskapsAvArField         = func_get_arg(0);
            $this->regnskapsAvMndField        = func_get_arg(1);
            $this->overskuddsprosentField     = func_get_arg(2);
            $this->rentedekningsgradField     = func_get_arg(3);
            $this->totalrentabilitetField     = func_get_arg(4);
            $this->eKRentabilitetField        = func_get_arg(5);
            $this->langLagerfinansField       = func_get_arg(6);
            $this->gjennomsnittLagerField     = func_get_arg(7);
            $this->egenkapitalAndelField      = func_get_arg(8);
            $this->tapsbufferField            = func_get_arg(9);
            $this->fremmedkapitalKostnadField = func_get_arg(10);
            $this->likviditetsgrad1Field      = func_get_arg(11);
            $this->likviditetsgrad2Field      = func_get_arg(12);
            $this->likviderProsentSalgField   = func_get_arg(13);
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
        $json['regnskapsAvArField']         = $this->regnskapsAvArField;
        $json['regnskapsAvMndField']        = $this->regnskapsAvMndField;
        $json['overskuddsprosentField']     = $this->overskuddsprosentField;
        $json['rentedekningsgradField']     = $this->rentedekningsgradField;
        $json['totalrentabilitetField']     = $this->totalrentabilitetField;
        $json['eKRentabilitetField']        = $this->eKRentabilitetField;
        $json['langLagerfinansField']       = $this->langLagerfinansField;
        $json['gjennomsnittLagerField']     = $this->gjennomsnittLagerField;
        $json['egenkapitalAndelField']      = $this->egenkapitalAndelField;
        $json['tapsbufferField']            = $this->tapsbufferField;
        $json['fremmedkapitalKostnadField'] = $this->fremmedkapitalKostnadField;
        $json['likviditetsgrad1Field']      = $this->likviditetsgrad1Field;
        $json['likviditetsgrad2Field']      = $this->likviditetsgrad2Field;
        $json['likviderProsentSalgField']   = $this->likviderProsentSalgField;

        return array_merge($json, $this->additionalProperties);
    }
}
