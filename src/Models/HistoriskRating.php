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
class HistoriskRating implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $endrArField public property
     */
    public $endrArField;

    /**
     * @todo Write general description for this property
     * @var integer|null $endrMndField public property
     */
    public $endrMndField;

    /**
     * @todo Write general description for this property
     * @var string|null $ratingField public property
     */
    public $ratingField;

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
     * @var integer|null $regnArField public property
     */
    public $regnArField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $endrArField          Initialization value for $this->endrArField
     * @param integer $endrMndField         Initialization value for $this->endrMndField
     * @param string  $ratingField          Initialization value for $this->ratingField
     * @param integer $limitField           Initialization value for $this->limitField
     * @param string  $aktuellHendelseField Initialization value for $this->aktuellHendelseField
     * @param integer $regnArField          Initialization value for $this->regnArField
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->endrArField          = func_get_arg(0);
            $this->endrMndField         = func_get_arg(1);
            $this->ratingField          = func_get_arg(2);
            $this->limitField           = func_get_arg(3);
            $this->aktuellHendelseField = func_get_arg(4);
            $this->regnArField          = func_get_arg(5);
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
        $json['endrArField']          = $this->endrArField;
        $json['endrMndField']         = $this->endrMndField;
        $json['ratingField']          = $this->ratingField;
        $json['limitField']           = $this->limitField;
        $json['aktuellHendelseField'] = $this->aktuellHendelseField;
        $json['regnArField']          = $this->regnArField;

        return array_merge($json, $this->additionalProperties);
    }
}
