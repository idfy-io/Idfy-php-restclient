<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Here you can setup email/sms notifications notifying the signer that they have a new document to
 * sign.
 */
class SignRequest implements JsonSerializable
{
    /**
     * Set this to true if you want to include the unsigned main document as an attachment to this email
     * message
     * @var bool|null $includeOriginalFile public property
     */
    public $includeOriginalFile;

    /**
     * Define your own email texts (Our default texts can be used by leaving this blank)
     * @var \IdfyLib\Models\Email[]|null $email public property
     */
    public $email;

    /**
     * Define your own sms texts (Our default texts can be used by leaving this blank)
     * @var \IdfyLib\Models\SMS[]|null $sms public property
     */
    public $sms;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool  $includeOriginalFile Initialization value for $this->includeOriginalFile
     * @param array $email               Initialization value for $this->email
     * @param array $sms                 Initialization value for $this->sms
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->includeOriginalFile = func_get_arg(0);
            $this->email               = func_get_arg(1);
            $this->sms                 = func_get_arg(2);
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
        $json['includeOriginalFile'] = $this->includeOriginalFile;
        $json['email']               = $this->email;
        $json['sms']                 = $this->sms;

        return array_merge($json, $this->additionalProperties);
    }
}
