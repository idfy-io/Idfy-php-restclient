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
class FullmaktPerson implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $internreferanseField public property
     */
    public $internreferanseField;

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
     * @var string|null $adresseField public property
     */
    public $adresseField;

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
     * @var string|null $fullmaktTypeKodeField public property
     */
    public $fullmaktTypeKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $fullmaktTypeTekstField public property
     */
    public $fullmaktTypeTekstField;

    /**
     * @todo Write general description for this property
     * @var string|null $fullmaktKodeField public property
     */
    public $fullmaktKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $fullmaktTekstField public property
     */
    public $fullmaktTekstField;

    /**
     * @todo Write general description for this property
     * @var integer|null $prioritetField public property
     */
    public $prioritetField;

    /**
     * @todo Write general description for this property
     * @var bool|null $prioritetFieldSpecified public property
     */
    public $prioritetFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var integer|null $antallField public property
     */
    public $antallField;

    /**
     * @todo Write general description for this property
     * @var bool|null $antallFieldSpecified public property
     */
    public $antallFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var bool|null $obligatoriskField public property
     */
    public $obligatoriskField;

    /**
     * @todo Write general description for this property
     * @var bool|null $obligatoriskFieldSpecified public property
     */
    public $obligatoriskFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\VervData[]|null $vervField public property
     */
    public $vervField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $internreferanseField       Initialization value for $this->internreferanseField
     * @param \DateTime $fodtDatoField              Initialization value for $this->fodtDatoField
     * @param bool      $fodtDatoFieldSpecified     Initialization value for $this->fodtDatoFieldSpecified
     * @param string    $navnField                  Initialization value for $this->navnField
     * @param string    $adresseField               Initialization value for $this->adresseField
     * @param integer   $postnrField                Initialization value for $this->postnrField
     * @param string    $poststedField              Initialization value for $this->poststedField
     * @param string    $fullmaktTypeKodeField      Initialization value for $this->fullmaktTypeKodeField
     * @param string    $fullmaktTypeTekstField     Initialization value for $this->fullmaktTypeTekstField
     * @param string    $fullmaktKodeField          Initialization value for $this->fullmaktKodeField
     * @param string    $fullmaktTekstField         Initialization value for $this->fullmaktTekstField
     * @param integer   $prioritetField             Initialization value for $this->prioritetField
     * @param bool      $prioritetFieldSpecified    Initialization value for $this->prioritetFieldSpecified
     * @param integer   $antallField                Initialization value for $this->antallField
     * @param bool      $antallFieldSpecified       Initialization value for $this->antallFieldSpecified
     * @param bool      $obligatoriskField          Initialization value for $this->obligatoriskField
     * @param bool      $obligatoriskFieldSpecified Initialization value for $this->obligatoriskFieldSpecified
     * @param array     $vervField                  Initialization value for $this->vervField
     */
    public function __construct()
    {
        if (18 == func_num_args()) {
            $this->internreferanseField       = func_get_arg(0);
            $this->fodtDatoField              = func_get_arg(1);
            $this->fodtDatoFieldSpecified     = func_get_arg(2);
            $this->navnField                  = func_get_arg(3);
            $this->adresseField               = func_get_arg(4);
            $this->postnrField                = func_get_arg(5);
            $this->poststedField              = func_get_arg(6);
            $this->fullmaktTypeKodeField      = func_get_arg(7);
            $this->fullmaktTypeTekstField     = func_get_arg(8);
            $this->fullmaktKodeField          = func_get_arg(9);
            $this->fullmaktTekstField         = func_get_arg(10);
            $this->prioritetField             = func_get_arg(11);
            $this->prioritetFieldSpecified    = func_get_arg(12);
            $this->antallField                = func_get_arg(13);
            $this->antallFieldSpecified       = func_get_arg(14);
            $this->obligatoriskField          = func_get_arg(15);
            $this->obligatoriskFieldSpecified = func_get_arg(16);
            $this->vervField                  = func_get_arg(17);
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
        $json['internreferanseField']       = $this->internreferanseField;
        $json['fodtDatoField']              = isset($this->fodtDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->fodtDatoField) : null;
        $json['fodtDatoFieldSpecified']     = $this->fodtDatoFieldSpecified;
        $json['navnField']                  = $this->navnField;
        $json['adresseField']               = $this->adresseField;
        $json['postnrField']                = $this->postnrField;
        $json['poststedField']              = $this->poststedField;
        $json['fullmaktTypeKodeField']      = $this->fullmaktTypeKodeField;
        $json['fullmaktTypeTekstField']     = $this->fullmaktTypeTekstField;
        $json['fullmaktKodeField']          = $this->fullmaktKodeField;
        $json['fullmaktTekstField']         = $this->fullmaktTekstField;
        $json['prioritetField']             = $this->prioritetField;
        $json['prioritetFieldSpecified']    = $this->prioritetFieldSpecified;
        $json['antallField']                = $this->antallField;
        $json['antallFieldSpecified']       = $this->antallFieldSpecified;
        $json['obligatoriskField']          = $this->obligatoriskField;
        $json['obligatoriskFieldSpecified'] = $this->obligatoriskFieldSpecified;
        $json['vervField']                  = $this->vervField;

        return array_merge($json, $this->additionalProperties);
    }
}
