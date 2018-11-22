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
class Juridisk implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $prokuraField public property
     */
    public $prokuraField;

    /**
     * @todo Write general description for this property
     * @var string|null $signaturField public property
     */
    public $signaturField;

    /**
     * @todo Write general description for this property
     * @var string|null $eierStrukturField public property
     */
    public $eierStrukturField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $prokuraField      Initialization value for $this->prokuraField
     * @param string $signaturField     Initialization value for $this->signaturField
     * @param string $eierStrukturField Initialization value for $this->eierStrukturField
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->prokuraField      = func_get_arg(0);
            $this->signaturField     = func_get_arg(1);
            $this->eierStrukturField = func_get_arg(2);
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
        $json['prokuraField']      = $this->prokuraField;
        $json['signaturField']     = $this->signaturField;
        $json['eierStrukturField'] = $this->eierStrukturField;

        return array_merge($json, $this->additionalProperties);
    }
}
