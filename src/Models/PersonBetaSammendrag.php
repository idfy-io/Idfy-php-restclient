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
class PersonBetaSammendrag implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $antallInkassoField public property
     */
    public $antallInkassoField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $ajourDatoInkassoField public property
     */
    public $ajourDatoInkassoField;

    /**
     * @todo Write general description for this property
     * @var integer|null $antallPanterLosoreField public property
     */
    public $antallPanterLosoreField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $ajourDatoLosoreField public property
     */
    public $ajourDatoLosoreField;

    /**
     * @todo Write general description for this property
     * @var integer|null $antallPanterEiendomField public property
     */
    public $antallPanterEiendomField;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $ajourDatoEiendomField public property
     */
    public $ajourDatoEiendomField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $antallInkassoField       Initialization value for $this->antallInkassoField
     * @param \DateTime $ajourDatoInkassoField    Initialization value for $this->ajourDatoInkassoField
     * @param integer   $antallPanterLosoreField  Initialization value for $this->antallPanterLosoreField
     * @param \DateTime $ajourDatoLosoreField     Initialization value for $this->ajourDatoLosoreField
     * @param integer   $antallPanterEiendomField Initialization value for $this->antallPanterEiendomField
     * @param \DateTime $ajourDatoEiendomField    Initialization value for $this->ajourDatoEiendomField
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->antallInkassoField       = func_get_arg(0);
            $this->ajourDatoInkassoField    = func_get_arg(1);
            $this->antallPanterLosoreField  = func_get_arg(2);
            $this->ajourDatoLosoreField     = func_get_arg(3);
            $this->antallPanterEiendomField = func_get_arg(4);
            $this->ajourDatoEiendomField    = func_get_arg(5);
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
        $json['antallInkassoField']       = $this->antallInkassoField;
        $json['ajourDatoInkassoField']    = isset($this->ajourDatoInkassoField) ?
            DateTimeHelper::toRfc3339DateTime($this->ajourDatoInkassoField) : null;
        $json['antallPanterLosoreField']  = $this->antallPanterLosoreField;
        $json['ajourDatoLosoreField']     = isset($this->ajourDatoLosoreField) ?
            DateTimeHelper::toRfc3339DateTime($this->ajourDatoLosoreField) : null;
        $json['antallPanterEiendomField'] = $this->antallPanterEiendomField;
        $json['ajourDatoEiendomField']    = isset($this->ajourDatoEiendomField) ?
            DateTimeHelper::toRfc3339DateTime($this->ajourDatoEiendomField) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
