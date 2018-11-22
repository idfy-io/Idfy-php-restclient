<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Creates a Identity request
 */
class CreateIdentificationRequest implements JsonSerializable
{
    /**
     * The return urls to be redirected to after the identification process is done
     * @required
     * @maps ReturnUrls
     * @var \IdfyLib\Models\ReturnUrls $returnUrls public property
     */
    public $returnUrls;

    /**
     * The identityprovider to use for the identification, if not set the user will get a list of all the e-
     * ID assosiated with your account to choose from.
     * @maps IdentityProvider
     * @var string|null $identityProvider public property
     */
    public $identityProvider;

    /**
     * If the identity process should be done in an iframe this settings object would have to set. The
     * redirect is then done in javascript.
     * @var \IdfyLib\Models\IFrameSettings|null $iFrame public property
     */
    public $iFrame;

    /**
     * The language to be used for the identification process, if not set the language of the users browser
     * will be used.
     * @maps Language
     * @var string|null $language public property
     */
    public $language;

    /**
     * Should the socialsecuritynumber be fetched from the identityprovider? Beware that there is an extra
     * cost of doing this every time and one need permission to do it.
     * @maps GetSocialSecurityNumber
     * @var bool|null $getSocialSecurityNumber public property
     */
    public $getSocialSecurityNumber;

    /**
     * If this is specified then the client will be prefilled with this value. (supported by Norwegian
     * BankID, NemID and Tupas)
     * @maps PreFilledSocialSecurityNumber
     * @var string|null $preFilledSocialSecurityNumber public property
     */
    public $preFilledSocialSecurityNumber;

    /**
     * Title of the identification page (Used when redirecting on larger devices). Not used in iFrame mode
     * @maps PageTitle
     * @var string|null $pageTitle public property
     */
    public $pageTitle;

    /**
     * The merchants reference to the identification process, this will also be used to identify an
     * identification in a detailed invoice. It is an advantage if this is unique for each API call.
     * @maps ExternalReference
     * @var string|null $externalReference public property
     */
    public $externalReference;

    /**
     * List of addon data that can be orderd. The result will be in MetaData list of the reponse
     * @maps Addonservices
     * @var array|null $addonservices public property
     */
    public $addonservices;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param ReturnUrls     $returnUrls                    Initialization value for $this->returnUrls
     * @param string         $identityProvider              Initialization value for $this->identityProvider
     * @param IFrameSettings $iFrame                        Initialization value for $this->iFrame
     * @param string         $language                      Initialization value for $this->language
     * @param bool           $getSocialSecurityNumber       Initialization value for $this->getSocialSecurityNumber
     * @param string         $preFilledSocialSecurityNumber Initialization value for $this-
     *                                                        >preFilledSocialSecurityNumber
     * @param string         $pageTitle                     Initialization value for $this->pageTitle
     * @param string         $externalReference             Initialization value for $this->externalReference
     * @param array          $addonservices                 Initialization value for $this->addonservices
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->returnUrls                    = func_get_arg(0);
            $this->identityProvider              = func_get_arg(1);
            $this->iFrame                        = func_get_arg(2);
            $this->language                      = func_get_arg(3);
            $this->getSocialSecurityNumber       = func_get_arg(4);
            $this->preFilledSocialSecurityNumber = func_get_arg(5);
            $this->pageTitle                     = func_get_arg(6);
            $this->externalReference             = func_get_arg(7);
            $this->addonservices                 = func_get_arg(8);
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
        $json['ReturnUrls']                    = $this->returnUrls;
        $json['IdentityProvider']              = $this->identityProvider;
        $json['iFrame']                        = $this->iFrame;
        $json['Language']                      = $this->language;
        $json['GetSocialSecurityNumber']       = $this->getSocialSecurityNumber;
        $json['PreFilledSocialSecurityNumber'] = $this->preFilledSocialSecurityNumber;
        $json['PageTitle']                     = $this->pageTitle;
        $json['ExternalReference']             = $this->externalReference;
        $json['Addonservices']                 = $this->addonservices;

        return array_merge($json, $this->additionalProperties);
    }
}
