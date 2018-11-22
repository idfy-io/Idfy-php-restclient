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
class Rating implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $rating1Field public property
     */
    public $rating1Field;

    /**
     * @todo Write general description for this property
     * @var string|null $ratingBeskrivelseField public property
     */
    public $ratingBeskrivelseField;

    /**
     * @todo Write general description for this property
     * @var integer|null $limitField public property
     */
    public $limitField;

    /**
     * @todo Write general description for this property
     * @var string|null $aktuellHendelseField public property
     */
    public $aktuellHendelseField;

    /**
     * @todo Write general description for this property
     * @var string|null $delbGrunnfaktaField public property
     */
    public $delbGrunnfaktaField;

    /**
     * @todo Write general description for this property
     * @var string|null $delbEierJurdiskField public property
     */
    public $delbEierJurdiskField;

    /**
     * @todo Write general description for this property
     * @var string|null $delbOkonomiField public property
     */
    public $delbOkonomiField;

    /**
     * @todo Write general description for this property
     * @var string|null $delbBetalingserfaringField public property
     */
    public $delbBetalingserfaringField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $rating1Field               Initialization value for $this->rating1Field
     * @param string  $ratingBeskrivelseField     Initialization value for $this->ratingBeskrivelseField
     * @param integer $limitField                 Initialization value for $this->limitField
     * @param string  $aktuellHendelseField       Initialization value for $this->aktuellHendelseField
     * @param string  $delbGrunnfaktaField        Initialization value for $this->delbGrunnfaktaField
     * @param string  $delbEierJurdiskField       Initialization value for $this->delbEierJurdiskField
     * @param string  $delbOkonomiField           Initialization value for $this->delbOkonomiField
     * @param string  $delbBetalingserfaringField Initialization value for $this->delbBetalingserfaringField
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->rating1Field               = func_get_arg(0);
            $this->ratingBeskrivelseField     = func_get_arg(1);
            $this->limitField                 = func_get_arg(2);
            $this->aktuellHendelseField       = func_get_arg(3);
            $this->delbGrunnfaktaField        = func_get_arg(4);
            $this->delbEierJurdiskField       = func_get_arg(5);
            $this->delbOkonomiField           = func_get_arg(6);
            $this->delbBetalingserfaringField = func_get_arg(7);
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
        $json['rating1Field']               = $this->rating1Field;
        $json['ratingBeskrivelseField']     = $this->ratingBeskrivelseField;
        $json['limitField']                 = $this->limitField;
        $json['aktuellHendelseField']       = $this->aktuellHendelseField;
        $json['delbGrunnfaktaField']        = $this->delbGrunnfaktaField;
        $json['delbEierJurdiskField']       = $this->delbEierJurdiskField;
        $json['delbOkonomiField']           = $this->delbOkonomiField;
        $json['delbBetalingserfaringField'] = $this->delbBetalingserfaringField;

        return array_merge($json, $this->additionalProperties);
    }
}
