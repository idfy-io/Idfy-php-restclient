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
class OkonomiEnk implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $fodselsdatoEierField public property
     */
    public $fodselsdatoEierField;

    /**
     * @todo Write general description for this property
     * @var integer|null $skatteArField public property
     */
    public $skatteArField;

    /**
     * @todo Write general description for this property
     * @var integer|null $formueField public property
     */
    public $formueField;

    /**
     * @todo Write general description for this property
     * @var double|null $endringFormueField public property
     */
    public $endringFormueField;

    /**
     * @todo Write general description for this property
     * @var integer|null $inntektField public property
     */
    public $inntektField;

    /**
     * @todo Write general description for this property
     * @var double|null $endringInntektField public property
     */
    public $endringInntektField;

    /**
     * @todo Write general description for this property
     * @var integer|null $skattField public property
     */
    public $skattField;

    /**
     * @todo Write general description for this property
     * @var string|null $skatteKlasseField public property
     */
    public $skatteKlasseField;

    /**
     * @todo Write general description for this property
     * @var string|null $skatteKlasseUtlField public property
     */
    public $skatteKlasseUtlField;

    /**
     * @todo Write general description for this property
     * @var integer|null $kommunenrField public property
     */
    public $kommunenrField;

    /**
     * @todo Write general description for this property
     * @var string|null $kommuneNavnField public property
     */
    public $kommuneNavnField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $fodselsdatoEierField Initialization value for $this->fodselsdatoEierField
     * @param integer   $skatteArField        Initialization value for $this->skatteArField
     * @param integer   $formueField          Initialization value for $this->formueField
     * @param double    $endringFormueField   Initialization value for $this->endringFormueField
     * @param integer   $inntektField         Initialization value for $this->inntektField
     * @param double    $endringInntektField  Initialization value for $this->endringInntektField
     * @param integer   $skattField           Initialization value for $this->skattField
     * @param string    $skatteKlasseField    Initialization value for $this->skatteKlasseField
     * @param string    $skatteKlasseUtlField Initialization value for $this->skatteKlasseUtlField
     * @param integer   $kommunenrField       Initialization value for $this->kommunenrField
     * @param string    $kommuneNavnField     Initialization value for $this->kommuneNavnField
     */
    public function __construct()
    {
        if (11 == func_num_args()) {
            $this->fodselsdatoEierField = func_get_arg(0);
            $this->skatteArField        = func_get_arg(1);
            $this->formueField          = func_get_arg(2);
            $this->endringFormueField   = func_get_arg(3);
            $this->inntektField         = func_get_arg(4);
            $this->endringInntektField  = func_get_arg(5);
            $this->skattField           = func_get_arg(6);
            $this->skatteKlasseField    = func_get_arg(7);
            $this->skatteKlasseUtlField = func_get_arg(8);
            $this->kommunenrField       = func_get_arg(9);
            $this->kommuneNavnField     = func_get_arg(10);
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
        $json['fodselsdatoEierField'] = isset($this->fodselsdatoEierField) ?
            DateTimeHelper::toRfc3339DateTime($this->fodselsdatoEierField) : null;
        $json['skatteArField']        = $this->skatteArField;
        $json['formueField']          = $this->formueField;
        $json['endringFormueField']   = $this->endringFormueField;
        $json['inntektField']         = $this->inntektField;
        $json['endringInntektField']  = $this->endringInntektField;
        $json['skattField']           = $this->skattField;
        $json['skatteKlasseField']    = $this->skatteKlasseField;
        $json['skatteKlasseUtlField'] = $this->skatteKlasseUtlField;
        $json['kommunenrField']       = $this->kommunenrField;
        $json['kommuneNavnField']     = $this->kommuneNavnField;

        return array_merge($json, $this->additionalProperties);
    }
}
