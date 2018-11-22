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
class PersonNaringsInteresser implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrField public property
     */
    public $orgnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $statusKodeField public property
     */
    public $statusKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $statusTekstField public property
     */
    public $statusTekstField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $statusDatoField public property
     */
    public $statusDatoField;

    /**
     * @todo Write general description for this property
     * @var string|null $navnField public property
     */
    public $navnField;

    /**
     * @todo Write general description for this property
     * @var string|null $selskFormField public property
     */
    public $selskFormField;

    /**
     * @todo Write general description for this property
     * @var string|null $rolleField public property
     */
    public $rolleField;

    /**
     * @todo Write general description for this property
     * @var double|null $eierandelField public property
     */
    public $eierandelField;

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
     * @param integer   $orgnrField       Initialization value for $this->orgnrField
     * @param string    $statusKodeField  Initialization value for $this->statusKodeField
     * @param string    $statusTekstField Initialization value for $this->statusTekstField
     * @param \DateTime $statusDatoField  Initialization value for $this->statusDatoField
     * @param string    $navnField        Initialization value for $this->navnField
     * @param string    $selskFormField   Initialization value for $this->selskFormField
     * @param string    $rolleField       Initialization value for $this->rolleField
     * @param double    $eierandelField   Initialization value for $this->eierandelField
     * @param string    $vervKodeField    Initialization value for $this->vervKodeField
     * @param string    $vervTekstField   Initialization value for $this->vervTekstField
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->orgnrField       = func_get_arg(0);
            $this->statusKodeField  = func_get_arg(1);
            $this->statusTekstField = func_get_arg(2);
            $this->statusDatoField  = func_get_arg(3);
            $this->navnField        = func_get_arg(4);
            $this->selskFormField   = func_get_arg(5);
            $this->rolleField       = func_get_arg(6);
            $this->eierandelField   = func_get_arg(7);
            $this->vervKodeField    = func_get_arg(8);
            $this->vervTekstField   = func_get_arg(9);
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
        $json['orgnrField']       = $this->orgnrField;
        $json['statusKodeField']  = $this->statusKodeField;
        $json['statusTekstField'] = $this->statusTekstField;
        $json['statusDatoField']  = isset($this->statusDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->statusDatoField) : null;
        $json['navnField']        = $this->navnField;
        $json['selskFormField']   = $this->selskFormField;
        $json['rolleField']       = $this->rolleField;
        $json['eierandelField']   = $this->eierandelField;
        $json['vervKodeField']    = $this->vervKodeField;
        $json['vervTekstField']   = $this->vervTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
