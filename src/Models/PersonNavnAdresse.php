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
class PersonNavnAdresse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $statusField public property
     */
    public $statusField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $statusDatoField public property
     */
    public $statusDatoField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $fodselsdatoField public property
     */
    public $fodselsdatoField;

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
     * @var string|null $postnrField public property
     */
    public $postnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $poststedField public property
     */
    public $poststedField;

    /**
     * @todo Write general description for this property
     * @var string|null $kommuneField public property
     */
    public $kommuneField;

    /**
     * @todo Write general description for this property
     * @var string|null $fylkeField public property
     */
    public $fylkeField;

    /**
     * @todo Write general description for this property
     * @var integer|null $alderField public property
     */
    public $alderField;

    /**
     * @todo Write general description for this property
     * @var string|null $kjonnField public property
     */
    public $kjonnField;

    /**
     * @todo Write general description for this property
     * @var array|null $telefonField public property
     */
    public $telefonField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $statusField      Initialization value for $this->statusField
     * @param \DateTime $statusDatoField  Initialization value for $this->statusDatoField
     * @param \DateTime $fodselsdatoField Initialization value for $this->fodselsdatoField
     * @param string    $navnField        Initialization value for $this->navnField
     * @param string    $adresseField     Initialization value for $this->adresseField
     * @param string    $postnrField      Initialization value for $this->postnrField
     * @param string    $poststedField    Initialization value for $this->poststedField
     * @param string    $kommuneField     Initialization value for $this->kommuneField
     * @param string    $fylkeField       Initialization value for $this->fylkeField
     * @param integer   $alderField       Initialization value for $this->alderField
     * @param string    $kjonnField       Initialization value for $this->kjonnField
     * @param array     $telefonField     Initialization value for $this->telefonField
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->statusField      = func_get_arg(0);
            $this->statusDatoField  = func_get_arg(1);
            $this->fodselsdatoField = func_get_arg(2);
            $this->navnField        = func_get_arg(3);
            $this->adresseField     = func_get_arg(4);
            $this->postnrField      = func_get_arg(5);
            $this->poststedField    = func_get_arg(6);
            $this->kommuneField     = func_get_arg(7);
            $this->fylkeField       = func_get_arg(8);
            $this->alderField       = func_get_arg(9);
            $this->kjonnField       = func_get_arg(10);
            $this->telefonField     = func_get_arg(11);
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
        $json['statusField']      = $this->statusField;
        $json['statusDatoField']  = isset($this->statusDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->statusDatoField) : null;
        $json['fodselsdatoField'] = isset($this->fodselsdatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->fodselsdatoField) : null;
        $json['navnField']        = $this->navnField;
        $json['adresseField']     = $this->adresseField;
        $json['postnrField']      = $this->postnrField;
        $json['poststedField']    = $this->poststedField;
        $json['kommuneField']     = $this->kommuneField;
        $json['fylkeField']       = $this->fylkeField;
        $json['alderField']       = $this->alderField;
        $json['kjonnField']       = $this->kjonnField;
        $json['telefonField']     = $this->telefonField;

        return array_merge($json, $this->additionalProperties);
    }
}
