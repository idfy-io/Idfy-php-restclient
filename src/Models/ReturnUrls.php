<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Return urls for the identity request
 */
class ReturnUrls implements JsonSerializable
{
    /**
     * The url to be redirected to if the identification process fails. This url supports the following
     * placeholders: [0] statuscode, [1] requestId, [2] ExternalReference (your unique id).
     * @required
     * @maps Error
     * @var string $error public property
     */
    public $error;

    /**
     * The url to be redirected to if the user aborts the identification process. This url supports the
     * following placeholders: [1] requestId, [2] ExternalReference (your unique id).
     * @required
     * @maps Abort
     * @var string $abort public property
     */
    public $abort;

    /**
     * The return urls to be redirected to after the identification process is a success. This url supports
     * the following placeholders: [1] requestId, [2] ExternalReference (your unique id).
     * @required
     * @maps Success
     * @var string $success public property
     */
    public $success;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $error   Initialization value for $this->error
     * @param string $abort   Initialization value for $this->abort
     * @param string $success Initialization value for $this->success
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->error   = func_get_arg(0);
            $this->abort   = func_get_arg(1);
            $this->success = func_get_arg(2);
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
        $json['Error']   = $this->error;
        $json['Abort']   = $this->abort;
        $json['Success'] = $this->success;

        return array_merge($json, $this->additionalProperties);
    }
}
