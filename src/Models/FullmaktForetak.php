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
class FullmaktForetak implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $dunsnrField public property
     */
    public $dunsnrField;

    /**
     * @todo Write general description for this property
     * @var integer|null $orgnrField public property
     */
    public $orgnrField;

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
     * @var string|null $selskapsformField public property
     */
    public $selskapsformField;

    /**
     * @todo Write general description for this property
     * @var string|null $prokuraKodeField public property
     */
    public $prokuraKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $prokuraTekstField public property
     */
    public $prokuraTekstField;

    /**
     * @todo Write general description for this property
     * @var string|null $signaturKodeField public property
     */
    public $signaturKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $signaturTekstField public property
     */
    public $signaturTekstField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\FullmaktPerson[]|null $fullmaktPersonField public property
     */
    public $fullmaktPersonField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $dunsnrField         Initialization value for $this->dunsnrField
     * @param integer $orgnrField          Initialization value for $this->orgnrField
     * @param string  $navnField           Initialization value for $this->navnField
     * @param string  $adresseField        Initialization value for $this->adresseField
     * @param integer $postnrField         Initialization value for $this->postnrField
     * @param string  $poststedField       Initialization value for $this->poststedField
     * @param string  $statusKodeField     Initialization value for $this->statusKodeField
     * @param string  $statusTekstField    Initialization value for $this->statusTekstField
     * @param string  $selskapsformField   Initialization value for $this->selskapsformField
     * @param string  $prokuraKodeField    Initialization value for $this->prokuraKodeField
     * @param string  $prokuraTekstField   Initialization value for $this->prokuraTekstField
     * @param string  $signaturKodeField   Initialization value for $this->signaturKodeField
     * @param string  $signaturTekstField  Initialization value for $this->signaturTekstField
     * @param array   $fullmaktPersonField Initialization value for $this->fullmaktPersonField
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->dunsnrField         = func_get_arg(0);
            $this->orgnrField          = func_get_arg(1);
            $this->navnField           = func_get_arg(2);
            $this->adresseField        = func_get_arg(3);
            $this->postnrField         = func_get_arg(4);
            $this->poststedField       = func_get_arg(5);
            $this->statusKodeField     = func_get_arg(6);
            $this->statusTekstField    = func_get_arg(7);
            $this->selskapsformField   = func_get_arg(8);
            $this->prokuraKodeField    = func_get_arg(9);
            $this->prokuraTekstField   = func_get_arg(10);
            $this->signaturKodeField   = func_get_arg(11);
            $this->signaturTekstField  = func_get_arg(12);
            $this->fullmaktPersonField = func_get_arg(13);
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
        $json['dunsnrField']         = $this->dunsnrField;
        $json['orgnrField']          = $this->orgnrField;
        $json['navnField']           = $this->navnField;
        $json['adresseField']        = $this->adresseField;
        $json['postnrField']         = $this->postnrField;
        $json['poststedField']       = $this->poststedField;
        $json['statusKodeField']     = $this->statusKodeField;
        $json['statusTekstField']    = $this->statusTekstField;
        $json['selskapsformField']   = $this->selskapsformField;
        $json['prokuraKodeField']    = $this->prokuraKodeField;
        $json['prokuraTekstField']   = $this->prokuraTekstField;
        $json['signaturKodeField']   = $this->signaturKodeField;
        $json['signaturTekstField']  = $this->signaturTekstField;
        $json['fullmaktPersonField'] = $this->fullmaktPersonField;

        return array_merge($json, $this->additionalProperties);
    }
}
