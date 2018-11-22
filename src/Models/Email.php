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
class Email implements JsonSerializable
{
    /**
     * Email language
     * @required
     * @var string $language public property
     */
    public $language;

    /**
     * Email subject
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * Insert your email text, we support plain text and markdown
     * @var string|null $text public property
     */
    public $text;

    /**
     * Name of sender
     * @var string|null $senderName public property
     */
    public $senderName;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $language   Initialization value for $this->language
     * @param string $subject    Initialization value for $this->subject
     * @param string $text       Initialization value for $this->text
     * @param string $senderName Initialization value for $this->senderName
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->language   = func_get_arg(0);
            $this->subject    = func_get_arg(1);
            $this->text       = func_get_arg(2);
            $this->senderName = func_get_arg(3);
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
        $json['language']   = $this->language;
        $json['subject']    = $this->subject;
        $json['text']       = $this->text;
        $json['senderName'] = $this->senderName;

        return array_merge($json, $this->additionalProperties);
    }
}
