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
class EventDto implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var object|null $payload public property
     */
    public $payload;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $timestamp public property
     */
    public $timestamp;

    /**
     * @todo Write general description for this property
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @var array|null $tags public property
     */
    public $tags;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id        Initialization value for $this->id
     * @param string    $type      Initialization value for $this->type
     * @param object    $payload   Initialization value for $this->payload
     * @param \DateTime $timestamp Initialization value for $this->timestamp
     * @param string    $accountId Initialization value for $this->accountId
     * @param array     $tags      Initialization value for $this->tags
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->id        = func_get_arg(0);
            $this->type      = func_get_arg(1);
            $this->payload   = func_get_arg(2);
            $this->timestamp = func_get_arg(3);
            $this->accountId = func_get_arg(4);
            $this->tags      = func_get_arg(5);
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
        $json['type']      = $this->type;
        $json['payload']   = $this->payload;
        $json['timestamp'] = isset($this->timestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->timestamp) : null;
        $json['accountId'] = $this->accountId;
        $json['tags']      = $this->tags;

        return array_merge($json, $this->additionalProperties);
    }
}
