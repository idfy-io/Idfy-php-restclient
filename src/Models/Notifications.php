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
class Notifications implements JsonSerializable
{
    /**
     * Setup what kind of notifications this signer should get. Defaults to off
     * @var \IdfyLib\Models\Setup|null $setup public property
     */
    public $setup;

    /**
     * If you create your own notifications texts (See the root object -&gt; Notification), you can create
     * your own merge fields with your own keys.
     *
     * You can then specify the text you want to insert in these fields per signer in this dictionary. Set
     * the dictionary key to the same value as the merge field value in your notification text, and the
     * value to the text you want us to merge in.
     * @var array|null $mergeFields public property
     */
    public $mergeFields;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param Setup $setup       Initialization value for $this->setup
     * @param array $mergeFields Initialization value for $this->mergeFields
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->setup       = func_get_arg(0);
            $this->mergeFields = func_get_arg(1);
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
        $json['setup']       = $this->setup;
        $json['mergeFields'] = $this->mergeFields;

        return array_merge($json, $this->additionalProperties);
    }
}
