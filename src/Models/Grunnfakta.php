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
class Grunnfakta implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $selskFormKodeField public property
     */
    public $selskFormKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $selskFormTekstField public property
     */
    public $selskFormTekstField;

    /**
     * @todo Write general description for this property
     * @var integer|null $etablertArField public property
     */
    public $etablertArField;

    /**
     * @todo Write general description for this property
     * @var bool|null $etablertArFieldSpecified public property
     */
    public $etablertArFieldSpecified;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $stiftetDatoField public property
     */
    public $stiftetDatoField;

    /**
     * @todo Write general description for this property
     * @var integer|null $aksjekapitalField public property
     */
    public $aksjekapitalField;

    /**
     * @todo Write general description for this property
     * @var string|null $aksjekapitalStatusField public property
     */
    public $aksjekapitalStatusField;

    /**
     * @todo Write general description for this property
     * @var string|null $registrertStedField public property
     */
    public $registrertStedField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $registrertDatoField public property
     */
    public $registrertDatoField;

    /**
     * @todo Write general description for this property
     * @var integer|null $revisorOrgnrField public property
     */
    public $revisorOrgnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $revisorNavnField public property
     */
    public $revisorNavnField;

    /**
     * @todo Write general description for this property
     * @var integer|null $bankRegnrField public property
     */
    public $bankRegnrField;

    /**
     * @todo Write general description for this property
     * @var string|null $bankNavnField public property
     */
    public $bankNavnField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\BransjeData[]|null $bransjeDataField public property
     */
    public $bransjeDataField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\AnsatteData[]|null $ansatteDataField public property
     */
    public $ansatteDataField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $selskFormKodeField       Initialization value for $this->selskFormKodeField
     * @param string    $selskFormTekstField      Initialization value for $this->selskFormTekstField
     * @param integer   $etablertArField          Initialization value for $this->etablertArField
     * @param bool      $etablertArFieldSpecified Initialization value for $this->etablertArFieldSpecified
     * @param \DateTime $stiftetDatoField         Initialization value for $this->stiftetDatoField
     * @param integer   $aksjekapitalField        Initialization value for $this->aksjekapitalField
     * @param string    $aksjekapitalStatusField  Initialization value for $this->aksjekapitalStatusField
     * @param string    $registrertStedField      Initialization value for $this->registrertStedField
     * @param \DateTime $registrertDatoField      Initialization value for $this->registrertDatoField
     * @param integer   $revisorOrgnrField        Initialization value for $this->revisorOrgnrField
     * @param string    $revisorNavnField         Initialization value for $this->revisorNavnField
     * @param integer   $bankRegnrField           Initialization value for $this->bankRegnrField
     * @param string    $bankNavnField            Initialization value for $this->bankNavnField
     * @param array     $bransjeDataField         Initialization value for $this->bransjeDataField
     * @param array     $ansatteDataField         Initialization value for $this->ansatteDataField
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->selskFormKodeField       = func_get_arg(0);
            $this->selskFormTekstField      = func_get_arg(1);
            $this->etablertArField          = func_get_arg(2);
            $this->etablertArFieldSpecified = func_get_arg(3);
            $this->stiftetDatoField         = func_get_arg(4);
            $this->aksjekapitalField        = func_get_arg(5);
            $this->aksjekapitalStatusField  = func_get_arg(6);
            $this->registrertStedField      = func_get_arg(7);
            $this->registrertDatoField      = func_get_arg(8);
            $this->revisorOrgnrField        = func_get_arg(9);
            $this->revisorNavnField         = func_get_arg(10);
            $this->bankRegnrField           = func_get_arg(11);
            $this->bankNavnField            = func_get_arg(12);
            $this->bransjeDataField         = func_get_arg(13);
            $this->ansatteDataField         = func_get_arg(14);
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
        $json['selskFormKodeField']       = $this->selskFormKodeField;
        $json['selskFormTekstField']      = $this->selskFormTekstField;
        $json['etablertArField']          = $this->etablertArField;
        $json['etablertArFieldSpecified'] = $this->etablertArFieldSpecified;
        $json['stiftetDatoField']         = isset($this->stiftetDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->stiftetDatoField) : null;
        $json['aksjekapitalField']        = $this->aksjekapitalField;
        $json['aksjekapitalStatusField']  = $this->aksjekapitalStatusField;
        $json['registrertStedField']      = $this->registrertStedField;
        $json['registrertDatoField']      = isset($this->registrertDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->registrertDatoField) : null;
        $json['revisorOrgnrField']        = $this->revisorOrgnrField;
        $json['revisorNavnField']         = $this->revisorNavnField;
        $json['bankRegnrField']           = $this->bankRegnrField;
        $json['bankNavnField']            = $this->bankNavnField;
        $json['bransjeDataField']         = $this->bransjeDataField;
        $json['ansatteDataField']         = $this->ansatteDataField;

        return array_merge($json, $this->additionalProperties);
    }
}
