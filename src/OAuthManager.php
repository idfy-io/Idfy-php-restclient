<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib;

use IdfyLib\Controllers\OAuthAuthorizationController;

/**
 * Utility class for OAuth 2 authorization and token management
 */
class OAuthManager
{
    /**
     * @var OAuthManager The reference to singleton instance of this class
     */
    private static $instance;

    /**
     * Singleton instance of OAuth 2 API controller
     * @var OAuthAuthorizationController
     */
    private $oAuthApi;

    /**
     * Returns the *Singleton* instance of this class.
     * @return OAuthManager The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Constructor
     */
    private function __construct()
    {
        $this->oAuthApi = OAuthAuthorizationController::getInstance();
    }

    /**
     * Authorize the client with the OAuth provider
     * @param  array|string|null $scope             List of scopes needed.
     * @param  array|null        $additionalParams  Additional parameters to send during authorization
     * @return \IdfyLib\Models\OAuthToken
     */
    public function authorize($scope = null, $additionalParams = null)
    {
        //send request for access token
        $oAuthToken = $this->oAuthApi->requestToken(
            $this->buildBasicHeader(),
            is_array($scope) ? implode(' ', $scope) : $scope,
            $additionalParams
        );

        //update configuration
        static::updateOAuthToken($oAuthToken);

        return $oAuthToken;
    }

    /**
     * Has the OAuth token expired?
     * @return boolean
     */
    public function isTokenExpired()
    {
        return isset(Configuration::$oAuthToken->expiry) && Configuration::$oAuthToken->expiry < time();
    }

    /**
     * Check if client is authorized, else attempt to get token
     */
    public function checkAuthorization()
    {
        //authorization is needed before making API calls
        if (Configuration::$oAuthToken == null) {
            $this->authorize();
            return;
        }
    }

    /**
     * Update OAuth token in configuration
     * @param  \IdfyLib\Models\OAuthToken $oAuthToken OAuth token
     */
    private static function updateOAuthToken($oAuthToken)
    {
        //add expiry
        if ($oAuthToken->expiresIn != null && $oAuthToken->expiresIn != 0) {
            $oAuthToken->expiry = time() + $oAuthToken->expiresIn;
        }

        //update config and call callback
        Configuration::$oAuthToken = $oAuthToken;

        if (is_callable(Configuration::$oAuthTokenUpdateCallback)) {
            call_user_func(Configuration::$oAuthTokenUpdateCallback, $oAuthToken);
        }
    }

    /**
     * Build authorization header value for basic auth
     * @param  string $username Username
     * @param  string $password Password
     * @return string
     */
    private static function buildBasicHeader()
    {
        return 'Basic ' . base64_encode(
            Configuration::$oAuthClientId . ':' . Configuration::$oAuthClientSecret
        );
    }
}
