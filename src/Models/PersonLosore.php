<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;
use IdfyLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class PersonLosore implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $ajourDatoField public property
     */
    public $ajourDatoField;

    /**
     * @todo Write general description for this property
     * @var string|null $spesTekst1Field public property
     */
    public $spesTekst1Field;

    /**
     * @todo Write general description for this property
     * @var string|null $spesTekst2Field public property
     */
    public $spesTekst2Field;

    /**
     * @todo Write general description for this property
     * @var string|null $spesTekst3Field public property
     */
    public $spesTekst3Field;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $ajourDatoField  Initialization value for $this->ajourDatoField
     * @param string    $spesTekst1Field Initialization value for $this->spesTekst1Field
     * @param string    $spesTekst2Field Initialization value for $this->spesTekst2Field
     * @param string    $spesTekst3Field Initialization value for $this->spesTekst3Field
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->ajourDatoField  = func_get_arg(0);
            $this->spesTekst1Field = func_get_arg(1);
            $this->spesTekst2Field = func_get_arg(2);
            $this->spesTekst3Field = func_get_arg(3);
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
        $json['ajourDatoField']  = isset($this->ajourDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->ajourDatoField) : null;
        $json['spesTekst1Field'] = $this->spesTekst1Field;
        $json['spesTekst2Field'] = $this->spesTekst2Field;
        $json['spesTekst3Field'] = $this->spesTekst3Field;

        return array_merge($json, $this->additionalProperties);
    }
}
