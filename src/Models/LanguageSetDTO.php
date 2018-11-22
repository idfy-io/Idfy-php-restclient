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
class LanguageSetDTO implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @var bool|null $isActive public property
     */
    public $isActive;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $id        Initialization value for $this->id
     * @param string    $name      Initialization value for $this->name
     * @param \DateTime $createdAt Initialization value for $this->createdAt
     * @param \DateTime $updatedAt Initialization value for $this->updatedAt
     * @param bool      $isActive  Initialization value for $this->isActive
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->name      = func_get_arg(1);
            $this->createdAt = func_get_arg(2);
            $this->updatedAt = func_get_arg(3);
            $this->isActive  = func_get_arg(4);
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
        $json['id']        = $this->id;
        $json['name']      = $this->name;
        $json['createdAt'] = isset($this->createdAt) ?
            DateTimeHelper::toRfc3339DateTime($this->createdAt) : null;
        $json['updatedAt'] = isset($this->updatedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->updatedAt) : null;
        $json['isActive']  = $this->isActive;

        return array_merge($json, $this->additionalProperties);
    }
}
