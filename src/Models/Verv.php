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
class Verv implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $internRefField public property
     */
    public $internRefField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $fodtDatoField public property
     */
    public $fodtDatoField;

    /**
     * @todo Write general description for this property
     * @var bool|null $fodtDatoFieldSpecified public property
     */
    public $fodtDatoFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var string|null $navnField public property
     */
    public $navnField;

    /**
     * @todo Write general description for this property
     * @var array|null $telefonField public property
     */
    public $telefonField;

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
     * @var string|null $vervKodeField public property
     */
    public $vervKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $vervTekstField public property
     */
    public $vervTekstField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $internRefField         Initialization value for $this->internRefField
     * @param \DateTime $fodtDatoField          Initialization value for $this->fodtDatoField
     * @param bool      $fodtDatoFieldSpecified Initialization value for $this->fodtDatoFieldSpecified
     * @param string    $navnField              Initialization value for $this->navnField
     * @param array     $telefonField           Initialization value for $this->telefonField
     * @param integer   $postnrField            Initialization value for $this->postnrField
     * @param string    $poststedField          Initialization value for $this->poststedField
     * @param string    $vervKodeField          Initialization value for $this->vervKodeField
     * @param string    $vervTekstField         Initialization value for $this->vervTekstField
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->internRefField         = func_get_arg(0);
            $this->fodtDatoField          = func_get_arg(1);
            $this->fodtDatoFieldSpecified = func_get_arg(2);
            $this->navnField              = func_get_arg(3);
            $this->telefonField           = func_get_arg(4);
            $this->postnrField            = func_get_arg(5);
            $this->poststedField          = func_get_arg(6);
            $this->vervKodeField          = func_get_arg(7);
            $this->vervTekstField         = func_get_arg(8);
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
        $json['internRefField']         = $this->internRefField;
        $json['fodtDatoField']          = isset($this->fodtDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->fodtDatoField) : null;
        $json['fodtDatoFieldSpecified'] = $this->fodtDatoFieldSpecified;
        $json['navnField']              = $this->navnField;
        $json['telefonField']           = $this->telefonField;
        $json['postnrField']            = $this->postnrField;
        $json['poststedField']          = $this->poststedField;
        $json['vervKodeField']          = $this->vervKodeField;
        $json['vervTekstField']         = $this->vervTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
