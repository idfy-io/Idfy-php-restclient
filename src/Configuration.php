<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     * @var string
     */
    public static $environment = Environments::PRODUCTION;

    /**
     * OAuth 2 Client ID
     * @var string
     */
    public static $oAuthClientId = 't50406ae2701149be8d72063a4ac005d0';

    /**
     * OAuth 2 Client Secret
     * @var string
     */
    public static $oAuthClientSecret = 'b3bf4003f34acc146a8270cb991fa2afc3be4a72df2aae0b5db3067120ec23a6';

    /**
     * OAuth 2 token
     * @var \IdfyLib\Models\OAuthToken
     */
    public static $oAuthToken = null;

    /**
     * OAuth token update callback
     * Called whenever token is updated
     * @var callable
     */
    public static $oAuthTokenUpdateCallback = null;

    /**
     * Get the base uri for a given server in the current environment
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::DEFAULT_)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     * @var array
     */
    private static $environmentsMap = array(
        Environments::PRODUCTION => array(
            Servers::DEFAULT_ => 'https://api.idfy.io',
            Servers::ACCESS_TOKEN_SERVER => 'https://api.idfy.io/oauth/connect/token',
        ),
        Environments::PRODUCTION_NORWAY => array(
            Servers::DEFAULT_ => 'https://api.idfy.no',
            Servers::ACCESS_TOKEN_SERVER => 'https://api.idfy.io/oauth/connect/token',
        ),
    );
}
