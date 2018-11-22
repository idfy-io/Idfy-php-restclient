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
class Setup implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $request public property
     */
    public $request;

    /**
     * @todo Write general description for this property
     * @var string|null $reminder public property
     */
    public $reminder;

    /**
     * @todo Write general description for this property
     * @var string|null $signatureReceipt public property
     */
    public $signatureReceipt;

    /**
     * @todo Write general description for this property
     * @var string|null $finalReceipt public property
     */
    public $finalReceipt;

    /**
     * @todo Write general description for this property
     * @var string|null $canceled public property
     */
    public $canceled;

    /**
     * @todo Write general description for this property
     * @var string|null $expired public property
     */
    public $expired;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $request          Initialization value for $this->request
     * @param string $reminder         Initialization value for $this->reminder
     * @param string $signatureReceipt Initialization value for $this->signatureReceipt
     * @param string $finalReceipt     Initialization value for $this->finalReceipt
     * @param string $canceled         Initialization value for $this->canceled
     * @param string $expired          Initialization value for $this->expired
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->request          = func_get_arg(0);
            $this->reminder         = func_get_arg(1);
            $this->signatureReceipt = func_get_arg(2);
            $this->finalReceipt     = func_get_arg(3);
            $this->canceled         = func_get_arg(4);
            $this->expired          = func_get_arg(5);
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
        $json['request']          = $this->request;
        $json['reminder']         = $this->reminder;
        $json['signatureReceipt'] = $this->signatureReceipt;
        $json['finalReceipt']     = $this->finalReceipt;
        $json['canceled']         = $this->canceled;
        $json['expired']          = $this->expired;

        return array_merge($json, $this->additionalProperties);
    }
}
