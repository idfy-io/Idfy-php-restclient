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
class PersonDelomrader implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $delomradeKodeField public property
     */
    public $delomradeKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $delomradeTekstField public property
     */
    public $delomradeTekstField;

    /**
     * @todo Write general description for this property
     * @var string|null $bedommelseKodeField public property
     */
    public $bedommelseKodeField;

    /**
     * @todo Write general description for this property
     * @var string|null $bedommelseTekstField public property
     */
    public $bedommelseTekstField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $delomradeKodeField   Initialization value for $this->delomradeKodeField
     * @param string $delomradeTekstField  Initialization value for $this->delomradeTekstField
     * @param string $bedommelseKodeField  Initialization value for $this->bedommelseKodeField
     * @param string $bedommelseTekstField Initialization value for $this->bedommelseTekstField
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->delomradeKodeField   = func_get_arg(0);
            $this->delomradeTekstField  = func_get_arg(1);
            $this->bedommelseKodeField  = func_get_arg(2);
            $this->bedommelseTekstField = func_get_arg(3);
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
        $json['delomradeKodeField']   = $this->delomradeKodeField;
        $json['delomradeTekstField']  = $this->delomradeTekstField;
        $json['bedommelseKodeField']  = $this->bedommelseKodeField;
        $json['bedommelseTekstField'] = $this->bedommelseTekstField;

        return array_merge($json, $this->additionalProperties);
    }
}
