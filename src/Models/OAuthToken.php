<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *OAuth 2 Authorization endpoint response
 */
class OAuthToken implements JsonSerializable
{
    /**
     * Access token
     * @required
     * @maps access_token
     * @var string $accessToken public property
     */
    public $accessToken;

    /**
     * Type of access token
     * @required
     * @maps token_type
     * @var string $tokenType public property
     */
    public $tokenType;

    /**
     * Time in seconds before the access token expires
     * @maps expires_in
     * @var integer|null $expiresIn public property
     */
    public $expiresIn;

    /**
     * List of scopes granted
     * This is a space-delimited list of strings.
     * @var string|null $scope public property
     */
    public $scope;

    /**
     * Time of token expiry as unix timestamp (UTC)
     * @var integer|null $expiry public property
     */
    public $expiry;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $accessToken Initialization value for $this->accessToken
     * @param string  $tokenType   Initialization value for $this->tokenType
     * @param integer $expiresIn   Initialization value for $this->expiresIn
     * @param string  $scope       Initialization value for $this->scope
     * @param integer $expiry      Initialization value for $this->expiry
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->accessToken = func_get_arg(0);
            $this->tokenType   = func_get_arg(1);
            $this->expiresIn   = func_get_arg(2);
            $this->scope       = func_get_arg(3);
            $this->expiry      = func_get_arg(4);
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
        $json['access_token'] = $this->accessToken;
        $json['token_type']   = $this->tokenType;
        $json['expires_in']   = $this->expiresIn;
        $json['scope']        = $this->scope;
        $json['expiry']       = $this->expiry;

        return array_merge($json, $this->additionalProperties);
    }
}
