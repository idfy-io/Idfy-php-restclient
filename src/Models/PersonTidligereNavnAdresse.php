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
class PersonTidligereNavnAdresse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $tidligereNavnAdresse1Field public property
     */
    public $tidligereNavnAdresse1Field;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $endringsDatoField public property
     */
    public $endringsDatoField;

    /**
     * @todo Write general description for this property
     * @var string|null $endringsTypeField public property
     */
    public $endringsTypeField;

    /**
     * @todo Write general description for this property
     * @var string|null $tidligerePostAdresseField public property
     */
    public $tidligerePostAdresseField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $tidligereNavnAdresse1Field Initialization value for $this->tidligereNavnAdresse1Field
     * @param \DateTime $endringsDatoField          Initialization value for $this->endringsDatoField
     * @param string    $endringsTypeField          Initialization value for $this->endringsTypeField
     * @param string    $tidligerePostAdresseField  Initialization value for $this->tidligerePostAdresseField
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->tidligereNavnAdresse1Field = func_get_arg(0);
            $this->endringsDatoField          = func_get_arg(1);
            $this->endringsTypeField          = func_get_arg(2);
            $this->tidligerePostAdresseField  = func_get_arg(3);
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
        $json['tidligereNavnAdresse1Field'] = $this->tidligereNavnAdresse1Field;
        $json['endringsDatoField']          = isset($this->endringsDatoField) ?
            DateTimeHelper::toRfc3339DateTime($this->endringsDatoField) : null;
        $json['endringsTypeField']          = $this->endringsTypeField;
        $json['tidligerePostAdresseField']  = $this->tidligerePostAdresseField;

        return array_merge($json, $this->additionalProperties);
    }
}
