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
class UI implements JsonSerializable
{
    /**
     * You can create dialogs that will be showed to the signer in the signature process
     * @var \IdfyLib\Models\Dialogs|null $dialogs public property
     */
    public $dialogs;

    /**
     * The signers preferred language, this setting is used when signing the document and in email/sms
     * notifications.<span style="color: blue;">If you set it to browser language the notifications will be
     * delievered in english unless you specify custom notification messages with browser as language in
     * your request.</span>
     * @var string|null $language public property
     */
    public $language;

    /**
     * Customize styling to make the the signature application look perfect in combination with your
     * application
     * @var \IdfyLib\Models\Styling|null $styling public property
     */
    public $styling;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param Dialogs $dialogs  Initialization value for $this->dialogs
     * @param string  $language Initialization value for $this->language
     * @param Styling $styling  Initialization value for $this->styling
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->dialogs  = func_get_arg(0);
            $this->language = func_get_arg(1);
            $this->styling  = func_get_arg(2);
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
        $json['dialogs']  = $this->dialogs;
        $json['language'] = $this->language;
        $json['styling']  = $this->styling;

        return array_merge($json, $this->additionalProperties);
    }
}
