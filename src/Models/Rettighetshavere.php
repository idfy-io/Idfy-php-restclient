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
class Rettighetshavere implements JsonSerializable
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
     * @var double|null $andelField public property
     */
    public $andelField;

    /**
     * @todo Write general description for this property
     * @var bool|null $indirekteEierField public property
     */
    public $indirekteEierField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $internreferanseField   Initialization value for $this->internreferanseField
     * @param \DateTime $fodtDatoField          Initialization value for $this->fodtDatoField
     * @param bool      $fodtDatoFieldSpecified Initialization value for $this->fodtDatoFieldSpecified
     * @param string    $navnField              Initialization value for $this->navnField
     * @param string    $adresseField           Initialization value for $this->adresseField
     * @param integer   $postnrField            Initialization value for $this->postnrField
     * @param string    $poststedField          Initialization value for $this->poststedField
     * @param double    $andelField             Initialization value for $this->andelField
     * @param bool      $indirekteEierField     Initialization value for $this->indirekteEierField
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->internreferanseField   = func_get_arg(0);
            $this->fodtDatoField          = func_get_arg(1);
            $this->fodtDatoFieldSpecified = func_get_arg(2);
            $this->navnField              = func_get_arg(3);
            $this->adresseField           = func_get_arg(4);
            $this->postnrField            = func_get_arg(5);
            $this->poststedField          = func_get_arg(6);
            $this->andelField             = func_get_arg(7);
            $this->indirekteEierField     = func_get_arg(8);
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
        $json['internreferanseField']   = $this->internreferanseField;
        $json['fodtDatoField']          = isset($this->fodtDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->fodtDatoField) : null;
        $json['fodtDatoFieldSpecified'] = $this->fodtDatoFieldSpecified;
        $json['navnField']              = $this->navnField;
        $json['adresseField']           = $this->adresseField;
        $json['postnrField']            = $this->postnrField;
        $json['poststedField']          = $this->poststedField;
        $json['andelField']             = $this->andelField;
        $json['indirekteEierField']     = $this->indirekteEierField;

        return array_merge($json, $this->additionalProperties);
    }
}
