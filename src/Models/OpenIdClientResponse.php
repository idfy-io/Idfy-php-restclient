<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;
use IdfyLib\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class OpenIdClientResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps AccountId
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @maps ClientId
     * @var string|null $clientId public property
     */
    public $clientId;

    /**
     * @todo Write general description for this property
     * @maps ClientName
     * @var string|null $clientName public property
     */
    public $clientName;

    /**
     * @todo Write general description for this property
     * @maps Enabled
     * @var bool|null $enabled public property
     */
    public $enabled;

    /**
     * @todo Write general description for this property
     * @maps Created
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $created public property
     */
    public $created;

    /**
     * @todo Write general description for this property
     * @maps LastChanged
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastChanged public property
     */
    public $lastChanged;

    /**
     * @todo Write general description for this property
     * @maps ClientUri
     * @var string|null $clientUri public property
     */
    public $clientUri;

    /**
     * @todo Write general description for this property
     * @maps RequireConsent
     * @var bool|null $requireConsent public property
     */
    public $requireConsent;

    /**
     * @todo Write general description for this property
     * @maps AllowRememberConsent
     * @var bool|null $allowRememberConsent public property
     */
    public $allowRememberConsent;

    /**
     * @todo Write general description for this property
     * @maps Flow
     * @var string|null $flow public property
     */
    public $flow;

    /**
     * @todo Write general description for this property
     * @maps AllowClientCredentialsOnly
     * @var bool|null $allowClientCredentialsOnly public property
     */
    public $allowClientCredentialsOnly;

    /**
     * @todo Write general description for this property
     * @maps RedirectUris
     * @var array|null $redirectUris public property
     */
    public $redirectUris;

    /**
     * @todo Write general description for this property
     * @maps PostLogoutRedirectUris
     * @var array|null $postLogoutRedirectUris public property
     */
    public $postLogoutRedirectUris;

    /**
     * Specifies logout URI at client for HTTP based logout.
     * @maps LogoutUri
     * @var string|null $logoutUri public property
     */
    public $logoutUri;

    /**
     * Specifies if the client will always show a confirmation page for sign-out. Defaults to false.
     * @maps RequireSignOutPrompt
     * @var bool|null $requireSignOutPrompt public property
     */
    public $requireSignOutPrompt;

    /**
     * @todo Write general description for this property
     * @maps AllowedScopes
     * @var array|null $allowedScopes public property
     */
    public $allowedScopes;

    /**
     * List of Identityproviders allowed. This requires setup on your account.
     * @maps IdentityProviderRestrictions
     * @var array|null $identityProviderRestrictions public property
     */
    public $identityProviderRestrictions;

    /**
     * Lifetime of identity token in seconds (defaults to 300 seconds / 5 minutes)
     * @maps IdentityTokenLifetime
     * @var integer|null $identityTokenLifetime public property
     */
    public $identityTokenLifetime;

    /**
     * Lifetime of access token in seconds (defaults to 3600 seconds / 1 hour)
     * @maps AccessTokenLifetime
     * @var integer|null $accessTokenLifetime public property
     */
    public $accessTokenLifetime;

    /**
     * Maximum lifetime of a refresh token in seconds. Defaults to 2592000 seconds / 30 days
     * @maps AbsoluteRefreshTokenLifetime
     * @var integer|null $absoluteRefreshTokenLifetime public property
     */
    public $absoluteRefreshTokenLifetime;

    /**
     * Sliding lifetime of a refresh token in seconds. Defaults to 1296000 seconds / 15 days
     * @maps SlidingRefreshTokenLifetime
     * @var integer|null $slidingRefreshTokenLifetime public property
     */
    public $slidingRefreshTokenLifetime;

    /**
     * @todo Write general description for this property
     * @maps RefreshTokenUsage
     * @var string|null $refreshTokenUsage public property
     */
    public $refreshTokenUsage;

    /**
     * Gets or sets a value indicating whether the access token (and its claims) should be updated on a
     * refresh token request.
     * @maps UpdateAccessTokenClaimsOnRefresh
     * @var bool|null $updateAccessTokenClaimsOnRefresh public property
     */
    public $updateAccessTokenClaimsOnRefresh;

    /**
     * @todo Write general description for this property
     * @maps RefreshTokenExpiration
     * @var string|null $refreshTokenExpiration public property
     */
    public $refreshTokenExpiration;

    /**
     * @todo Write general description for this property
     * @maps AccessTokenType
     * @var string|null $accessTokenType public property
     */
    public $accessTokenType;

    /**
     * Gets or sets a value indicating whether JWT access tokens should include an identifier
     * @maps IncludeJwtId
     * @var bool|null $includeJwtId public property
     */
    public $includeJwtId;

    /**
     * @todo Write general description for this property
     * @maps Claims
     * @var \IdfyLib\Models\ClaimLite[]|null $claims public property
     */
    public $claims;

    /**
     * Gets or sets a value indicating whether client claims should be always included in the access tokens
     * - or only for client credentials flow.
     * @maps AlwaysSendClientClaims
     * @var bool|null $alwaysSendClientClaims public property
     */
    public $alwaysSendClientClaims;

    /**
     * @todo Write general description for this property
     * @maps AllowedCorsOrigins
     * @var array|null $allowedCorsOrigins public property
     */
    public $allowedCorsOrigins;

    /**
     * @todo Write general description for this property
     * @maps AllowAccessTokensViaBrowser
     * @var bool|null $allowAccessTokensViaBrowser public property
     */
    public $allowAccessTokensViaBrowser;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $accountId                        Initialization value for $this->accountId
     * @param string    $clientId                         Initialization value for $this->clientId
     * @param string    $clientName                       Initialization value for $this->clientName
     * @param bool      $enabled                          Initialization value for $this->enabled
     * @param \DateTime $created                          Initialization value for $this->created
     * @param \DateTime $lastChanged                      Initialization value for $this->lastChanged
     * @param string    $clientUri                        Initialization value for $this->clientUri
     * @param bool      $requireConsent                   Initialization value for $this->requireConsent
     * @param bool      $allowRememberConsent             Initialization value for $this->allowRememberConsent
     * @param string    $flow                             Initialization value for $this->flow
     * @param bool      $allowClientCredentialsOnly       Initialization value for $this->allowClientCredentialsOnly
     * @param array     $redirectUris                     Initialization value for $this->redirectUris
     * @param array     $postLogoutRedirectUris           Initialization value for $this->postLogoutRedirectUris
     * @param string    $logoutUri                        Initialization value for $this->logoutUri
     * @param bool      $requireSignOutPrompt             Initialization value for $this->requireSignOutPrompt
     * @param array     $allowedScopes                    Initialization value for $this->allowedScopes
     * @param array     $identityProviderRestrictions     Initialization value for $this-
     *                                                      >identityProviderRestrictions
     * @param integer   $identityTokenLifetime            Initialization value for $this->identityTokenLifetime
     * @param integer   $accessTokenLifetime              Initialization value for $this->accessTokenLifetime
     * @param integer   $absoluteRefreshTokenLifetime     Initialization value for $this-
     *                                                      >absoluteRefreshTokenLifetime
     * @param integer   $slidingRefreshTokenLifetime      Initialization value for $this->slidingRefreshTokenLifetime
     * @param string    $refreshTokenUsage                Initialization value for $this->refreshTokenUsage
     * @param bool      $updateAccessTokenClaimsOnRefresh Initialization value for $this-
     *                                                      >updateAccessTokenClaimsOnRefresh
     * @param string    $refreshTokenExpiration           Initialization value for $this->refreshTokenExpiration
     * @param string    $accessTokenType                  Initialization value for $this->accessTokenType
     * @param bool      $includeJwtId                     Initialization value for $this->includeJwtId
     * @param array     $claims                           Initialization value for $this->claims
     * @param bool      $alwaysSendClientClaims           Initialization value for $this->alwaysSendClientClaims
     * @param array     $allowedCorsOrigins               Initialization value for $this->allowedCorsOrigins
     * @param bool      $allowAccessTokensViaBrowser      Initialization value for $this->allowAccessTokensViaBrowser
     */
    public function __construct()
    {
        if (30 == func_num_args()) {
            $this->accountId                        = func_get_arg(0);
            $this->clientId                         = func_get_arg(1);
            $this->clientName                       = func_get_arg(2);
            $this->enabled                          = func_get_arg(3);
            $this->created                          = func_get_arg(4);
            $this->lastChanged                      = func_get_arg(5);
            $this->clientUri                        = func_get_arg(6);
            $this->requireConsent                   = func_get_arg(7);
            $this->allowRememberConsent             = func_get_arg(8);
            $this->flow                             = func_get_arg(9);
            $this->allowClientCredentialsOnly       = func_get_arg(10);
            $this->redirectUris                     = func_get_arg(11);
            $this->postLogoutRedirectUris           = func_get_arg(12);
            $this->logoutUri                        = func_get_arg(13);
            $this->requireSignOutPrompt             = func_get_arg(14);
            $this->allowedScopes                    = func_get_arg(15);
            $this->identityProviderRestrictions     = func_get_arg(16);
            $this->identityTokenLifetime            = func_get_arg(17);
            $this->accessTokenLifetime              = func_get_arg(18);
            $this->absoluteRefreshTokenLifetime     = func_get_arg(19);
            $this->slidingRefreshTokenLifetime      = func_get_arg(20);
            $this->refreshTokenUsage                = func_get_arg(21);
            $this->updateAccessTokenClaimsOnRefresh = func_get_arg(22);
            $this->refreshTokenExpiration           = func_get_arg(23);
            $this->accessTokenType                  = func_get_arg(24);
            $this->includeJwtId                     = func_get_arg(25);
            $this->claims                           = func_get_arg(26);
            $this->alwaysSendClientClaims           = func_get_arg(27);
            $this->allowedCorsOrigins               = func_get_arg(28);
            $this->allowAccessTokensViaBrowser      = func_get_arg(29);
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
        $json['AccountId']                        = $this->accountId;
        $json['ClientId']                         = $this->clientId;
        $json['ClientName']                       = $this->clientName;
        $json['Enabled']                          = $this->enabled;
        $json['Created']                          = isset($this->created) ?
            DateTimeHelper::toRfc3339DateTime($this->created) : null;
        $json['LastChanged']                      = isset($this->lastChanged) ?
            DateTimeHelper::toRfc3339DateTime($this->lastChanged) : null;
        $json['ClientUri']                        = $this->clientUri;
        $json['RequireConsent']                   = $this->requireConsent;
        $json['AllowRememberConsent']             = $this->allowRememberConsent;
        $json['Flow']                             = $this->flow;
        $json['AllowClientCredentialsOnly']       = $this->allowClientCredentialsOnly;
        $json['RedirectUris']                     = $this->redirectUris;
        $json['PostLogoutRedirectUris']           = $this->postLogoutRedirectUris;
        $json['LogoutUri']                        = $this->logoutUri;
        $json['RequireSignOutPrompt']             = $this->requireSignOutPrompt;
        $json['AllowedScopes']                    = $this->allowedScopes;
        $json['IdentityProviderRestrictions']     = $this->identityProviderRestrictions;
        $json['IdentityTokenLifetime']            = $this->identityTokenLifetime;
        $json['AccessTokenLifetime']              = $this->accessTokenLifetime;
        $json['AbsoluteRefreshTokenLifetime']     = $this->absoluteRefreshTokenLifetime;
        $json['SlidingRefreshTokenLifetime']      = $this->slidingRefreshTokenLifetime;
        $json['RefreshTokenUsage']                = $this->refreshTokenUsage;
        $json['UpdateAccessTokenClaimsOnRefresh'] = $this->updateAccessTokenClaimsOnRefresh;
        $json['RefreshTokenExpiration']           = $this->refreshTokenExpiration;
        $json['AccessTokenType']                  = $this->accessTokenType;
        $json['IncludeJwtId']                     = $this->includeJwtId;
        $json['Claims']                           = $this->claims;
        $json['AlwaysSendClientClaims']           = $this->alwaysSendClientClaims;
        $json['AllowedCorsOrigins']               = $this->allowedCorsOrigins;
        $json['AllowAccessTokensViaBrowser']      = $this->allowAccessTokensViaBrowser;

        return array_merge($json, $this->additionalProperties);
    }
}
