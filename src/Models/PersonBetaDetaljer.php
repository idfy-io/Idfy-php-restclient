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
class PersonBetaDetaljer implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $registrertDatoField public property
     */
    public $registrertDatoField;

    /**
     * @todo Write general description for this property
     * @var string|null $betaGruppeKodeField public property
     */
    public $betaGruppeKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $betaGruppeTekstField public property
     */
    public $betaGruppeTekstField;

    /**
     * @todo Write general description for this property
     * @var string|null $betaTypeField public property
     */
    public $betaTypeField;

    /**
     * @todo Write general description for this property
     * @var string|null $betaTekstField public property
     */
    public $betaTekstField;

    /**
     * @todo Write general description for this property
     * @var integer|null $betaBelopField public property
     */
    public $betaBelopField;

    /**
     * @todo Write general description for this property
     * @var string|null $kildeKodeField public property
     */
    public $kildeKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $kildeTekstField public property
     */
    public $kildeTekstField;

    /**
     * @todo Write general description for this property
     * @var integer|null $kildeReferansenrField public property
     */
    public $kildeReferansenrField;

    /**
     * @todo Write general description for this property
     * @var string|null $statusAnmerkningField public property
     */
    public $statusAnmerkningField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $statusDatoField public property
     */
    public $statusDatoField;

    /**
     * @todo Write general description for this property
     * @var string|null $kreditorField public property
     */
    public $kreditorField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $registrertDatoField   Initialization value for $this->registrertDatoField
     * @param string    $betaGruppeKodeField   Initialization value for $this->betaGruppeKodeField
     * @param string    $betaGruppeTekstField  Initialization value for $this->betaGruppeTekstField
     * @param string    $betaTypeField         Initialization value for $this->betaTypeField
     * @param string    $betaTekstField        Initialization value for $this->betaTekstField
     * @param integer   $betaBelopField        Initialization value for $this->betaBelopField
     * @param string    $kildeKodeField        Initialization value for $this->kildeKodeField
     * @param string    $kildeTekstField       Initialization value for $this->kildeTekstField
     * @param integer   $kildeReferansenrField Initialization value for $this->kildeReferansenrField
     * @param string    $statusAnmerkningField Initialization value for $this->statusAnmerkningField
     * @param \DateTime $statusDatoField       Initialization value for $this->statusDatoField
     * @param string    $kreditorField         Initialization value for $this->kreditorField
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->registrertDatoField   = func_get_arg(0);
            $this->betaGruppeKodeField   = func_get_arg(1);
            $this->betaGruppeTekstField  = func_get_arg(2);
            $this->betaTypeField         = func_get_arg(3);
            $this->betaTekstField        = func_get_arg(4);
            $this->betaBelopField        = func_get_arg(5);
            $this->kildeKodeField        = func_get_arg(6);
            $this->kildeTekstField       = func_get_arg(7);
            $this->kildeReferansenrField = func_get_arg(8);
            $this->statusAnmerkningField = func_get_arg(9);
            $this->statusDatoField       = func_get_arg(10);
            $this->kreditorField         = func_get_arg(11);
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
        $json['registrertDatoField']   = isset($this->registrertDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->registrertDatoField) : null;
        $json['betaGruppeKodeField']   = $this->betaGruppeKodeField;
        $json['betaGruppeTekstField']  = $this->betaGruppeTekstField;
        $json['betaTypeField']         = $this->betaTypeField;
        $json['betaTekstField']        = $this->betaTekstField;
        $json['betaBelopField']        = $this->betaBelopField;
        $json['kildeKodeField']        = $this->kildeKodeField;
        $json['kildeTekstField']       = $this->kildeTekstField;
        $json['kildeReferansenrField'] = $this->kildeReferansenrField;
        $json['statusAnmerkningField'] = $this->statusAnmerkningField;
        $json['statusDatoField']       = isset($this->statusDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->statusDatoField) : null;
        $json['kreditorField']         = $this->kreditorField;

        return array_merge($json, $this->additionalProperties);
    }
}
