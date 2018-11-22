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
class WebhookResponse implements JsonSerializable
{
    /**
     * The status code returned by the webhook endpoint on last delivery attempt.
     * @var integer|null $code public property
     */
    public $code;

    /**
     * The message returned by the webhook endpoint on last delivery attempt.
     * @var string|null $message public property
     */
    public $message;

    /**
     * Time at which the last delivery attempt was made.
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $timestamp public property
     */
    public $timestamp;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $code      Initialization value for $this->code
     * @param string    $message   Initialization value for $this->message
     * @param \DateTime $timestamp Initialization value for $this->timestamp
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->code      = func_get_arg(0);
            $this->message   = func_get_arg(1);
            $this->timestamp = func_get_arg(2);
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
        $json['code']      = $this->code;
        $json['message']   = $this->message;
        $json['timestamp'] = isset($this->timestamp) ?
            DateTimeHelper::toRfc3339DateTime($this->timestamp) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
