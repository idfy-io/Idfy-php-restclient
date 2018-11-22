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
class AvdelingData implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $antallAnsatteField public property
     */
    public $antallAnsatteField;

    /**
     * @todo Write general description for this property
     * @var bool|null $antallAnsatteFieldSpecified public property
     */
    public $antallAnsatteFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var integer|null $telefonField public property
     */
    public $telefonField;

    /**
     * @todo Write general description for this property
     * @var bool|null $telefonFieldSpecified public property
     */
    public $telefonFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var integer|null $telefaxField public property
     */
    public $telefaxField;

    /**
     * @todo Write general description for this property
     * @var bool|null $telefaxFieldSpecified public property
     */
    public $telefaxFieldSpecified;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $stiftetDatoField public property
     */
    public $stiftetDatoField;

    /**
     * @todo Write general description for this property
     * @var string|null $bransjeKodeField public property
     */
    public $bransjeKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $bransjeTekstField public property
     */
    public $bransjeTekstField;

    /**
     * @todo Write general description for this property
     * @var string|null $dagligLederField public property
     */
    public $dagligLederField;

    /**
     * @todo Write general description for this property
     * @var integer|null $hovedforetakOrgnrField public property
     */
    public $hovedforetakOrgnrField;

    /**
     * @todo Write general description for this property
     * @var bool|null $hovedforetakOrgnrFieldSpecified public property
     */
    public $hovedforetakOrgnrFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var integer|null $hovedforetakDunsnrField public property
     */
    public $hovedforetakDunsnrField;

    /**
     * @todo Write general description for this property
     * @var bool|null $hovedforetakDunsnrFieldSpecified public property
     */
    public $hovedforetakDunsnrFieldSpecified;

    /**
     * @todo Write general description for this property
     * @var string|null $hovedforetakNavnField public property
     */
    public $hovedforetakNavnField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $antallAnsatteField               Initialization value for $this->antallAnsatteField
     * @param bool      $antallAnsatteFieldSpecified      Initialization value for $this->antallAnsatteFieldSpecified
     * @param integer   $telefonField                     Initialization value for $this->telefonField
     * @param bool      $telefonFieldSpecified            Initialization value for $this->telefonFieldSpecified
     * @param integer   $telefaxField                     Initialization value for $this->telefaxField
     * @param bool      $telefaxFieldSpecified            Initialization value for $this->telefaxFieldSpecified
     * @param \DateTime $stiftetDatoField                 Initialization value for $this->stiftetDatoField
     * @param string    $bransjeKodeField                 Initialization value for $this->bransjeKodeField
     * @param string    $bransjeTekstField                Initialization value for $this->bransjeTekstField
     * @param string    $dagligLederField                 Initialization value for $this->dagligLederField
     * @param integer   $hovedforetakOrgnrField           Initialization value for $this->hovedforetakOrgnrField
     * @param bool      $hovedforetakOrgnrFieldSpecified  Initialization value for $this-
     *                                                      >hovedforetakOrgnrFieldSpecified
     * @param integer   $hovedforetakDunsnrField          Initialization value for $this->hovedforetakDunsnrField
     * @param bool      $hovedforetakDunsnrFieldSpecified Initialization value for $this-
     *                                                      >hovedforetakDunsnrFieldSpecified
     * @param string    $hovedforetakNavnField            Initialization value for $this->hovedforetakNavnField
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->antallAnsatteField               = func_get_arg(0);
            $this->antallAnsatteFieldSpecified      = func_get_arg(1);
            $this->telefonField                     = func_get_arg(2);
            $this->telefonFieldSpecified            = func_get_arg(3);
            $this->telefaxField                     = func_get_arg(4);
            $this->telefaxFieldSpecified            = func_get_arg(5);
            $this->stiftetDatoField                 = func_get_arg(6);
            $this->bransjeKodeField                 = func_get_arg(7);
            $this->bransjeTekstField                = func_get_arg(8);
            $this->dagligLederField                 = func_get_arg(9);
            $this->hovedforetakOrgnrField           = func_get_arg(10);
            $this->hovedforetakOrgnrFieldSpecified  = func_get_arg(11);
            $this->hovedforetakDunsnrField          = func_get_arg(12);
            $this->hovedforetakDunsnrFieldSpecified = func_get_arg(13);
            $this->hovedforetakNavnField            = func_get_arg(14);
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
        $json['antallAnsatteField']               = $this->antallAnsatteField;
        $json['antallAnsatteFieldSpecified']      = $this->antallAnsatteFieldSpecified;
        $json['telefonField']                     = $this->telefonField;
        $json['telefonFieldSpecified']            = $this->telefonFieldSpecified;
        $json['telefaxField']                     = $this->telefaxField;
        $json['telefaxFieldSpecified']            = $this->telefaxFieldSpecified;
        $json['stiftetDatoField']                 = isset($this->stiftetDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->stiftetDatoField) : null;
        $json['bransjeKodeField']                 = $this->bransjeKodeField;
        $json['bransjeTekstField']                = $this->bransjeTekstField;
        $json['dagligLederField']                 = $this->dagligLederField;
        $json['hovedforetakOrgnrField']           = $this->hovedforetakOrgnrField;
        $json['hovedforetakOrgnrFieldSpecified']  = $this->hovedforetakOrgnrFieldSpecified;
        $json['hovedforetakDunsnrField']          = $this->hovedforetakDunsnrField;
        $json['hovedforetakDunsnrFieldSpecified'] = $this->hovedforetakDunsnrFieldSpecified;
        $json['hovedforetakNavnField']            = $this->hovedforetakNavnField;

        return array_merge($json, $this->additionalProperties);
    }
}
