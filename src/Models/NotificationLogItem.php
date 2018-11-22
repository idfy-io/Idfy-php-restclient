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
class NotificationLogItem implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $sentTimeStamp public property
     */
    public $sentTimeStamp;

    /**
     * @todo Write general description for this property
     * @var string|null $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @var string|null $text public property
     */
    public $text;

    /**
     * @todo Write general description for this property
     * @var string|null $messageType public property
     */
    public $messageType;

    /**
     * @todo Write general description for this property
     * @var string|null $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @var string|null $fromAddress public property
     */
    public $fromAddress;

    /**
     * @todo Write general description for this property
     * @var string|null $receiver public property
     */
    public $receiver;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $sentTimeStamp Initialization value for $this->sentTimeStamp
     * @param string $title         Initialization value for $this->title
     * @param string $text          Initialization value for $this->text
     * @param string $messageType   Initialization value for $this->messageType
     * @param string $status        Initialization value for $this->status
     * @param string $fromAddress   Initialization value for $this->fromAddress
     * @param string $receiver      Initialization value for $this->receiver
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->sentTimeStamp = func_get_arg(0);
            $this->title         = func_get_arg(1);
            $this->text          = func_get_arg(2);
            $this->messageType   = func_get_arg(3);
            $this->status        = func_get_arg(4);
            $this->fromAddress   = func_get_arg(5);
            $this->receiver      = func_get_arg(6);
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
        $json['sentTimeStamp'] = $this->sentTimeStamp;
        $json['title']         = $this->title;
        $json['text']          = $this->text;
        $json['messageType']   = $this->messageType;
        $json['status']        = $this->status;
        $json['fromAddress']   = $this->fromAddress;
        $json['receiver']      = $this->receiver;

        return array_merge($json, $this->additionalProperties);
    }
}
