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
class Seal implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $sealedBy public property
     */
    public $sealedBy;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $sealedTimestamp public property
     */
    public $sealedTimestamp;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Certificate|null $certificate public property
     */
    public $certificate;

    /**
     * @todo Write general description for this property
     * @var bool|null $sealValid public property
     */
    public $sealValid;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string       $sealedBy        Initialization value for $this->sealedBy
     * @param \DateTime    $sealedTimestamp Initialization value for $this->sealedTimestamp
     * @param Certificate  $certificate     Initialization value for $this->certificate
     * @param bool         $sealValid       Initialization value for $this->sealValid
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->sealedBy        = func_get_arg(0);
            $this->sealedTimestamp = func_get_arg(1);
            $this->certificate     = func_get_arg(2);
            $this->sealValid       = func_get_arg(3);
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
        $json['sealedBy']        = $this->sealedBy;
        $json['sealedTimestamp'] = isset($this->sealedTimestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->sealedTimestamp) : null;
        $json['certificate']     = $this->certificate;
        $json['sealValid']       = $this->sealValid;

        return array_merge($json, $this->additionalProperties);
    }
}
