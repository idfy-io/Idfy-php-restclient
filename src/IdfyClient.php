<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib;

use IdfyLib\Controllers;

/**
 * Idfy client class
 */
class IdfyClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthClientId = null,
        $oAuthClientSecret = null
    ) {
        Configuration::$oAuthClientId = $oAuthClientId ? $oAuthClientId : Configuration::$oAuthClientId;
        Configuration::$oAuthClientSecret = $oAuthClientSecret ? $oAuthClientSecret : Configuration::$oAuthClientSecret;
    }
    /**
     * Singleton access to Signature controller
     * @return Controllers\SignatureController The *Singleton* instance
     */
    public function getSignature()
    {
        return Controllers\SignatureController::getInstance();
    }
    /**
     * Singleton access to Translations controller
     * @return Controllers\TranslationsController The *Singleton* instance
     */
    public function getTranslations()
    {
        return Controllers\TranslationsController::getInstance();
    }
    /**
     * Singleton access to Person controller
     * @return Controllers\PersonController The *Singleton* instance
     */
    public function getPerson()
    {
        return Controllers\PersonController::getInstance();
    }
    /**
     * Singleton access to Languages controller
     * @return Controllers\LanguagesController The *Singleton* instance
     */
    public function getLanguages()
    {
        return Controllers\LanguagesController::getInstance();
    }
    /**
     * Singleton access to LanguageSets controller
     * @return Controllers\LanguageSetsController The *Singleton* instance
     */
    public function getLanguageSets()
    {
        return Controllers\LanguageSetsController::getInstance();
    }
    /**
     * Singleton access to Template controller
     * @return Controllers\TemplateController The *Singleton* instance
     */
    public function getTemplate()
    {
        return Controllers\TemplateController::getInstance();
    }
    /**
     * Singleton access to NorwegianBankID controller
     * @return Controllers\NorwegianBankIDController The *Singleton* instance
     */
    public function getNorwegianBankID()
    {
        return Controllers\NorwegianBankIDController::getInstance();
    }
    /**
     * Singleton access to Aml controller
     * @return Controllers\AmlController The *Singleton* instance
     */
    public function getAml()
    {
        return Controllers\AmlController::getInstance();
    }
    /**
     * Singleton access to OpenID controller
     * @return Controllers\OpenIDController The *Singleton* instance
     */
    public function getOpenID()
    {
        return Controllers\OpenIDController::getInstance();
    }
    /**
     * Singleton access to Invoice controller
     * @return Controllers\InvoiceController The *Singleton* instance
     */
    public function getInvoice()
    {
        return Controllers\InvoiceController::getInstance();
    }
    /**
     * Singleton access to Account controller
     * @return Controllers\AccountController The *Singleton* instance
     */
    public function getAccount()
    {
        return Controllers\AccountController::getInstance();
    }
    /**
     * Singleton access to OAuthAPIClient controller
     * @return Controllers\OAuthAPIClientController The *Singleton* instance
     */
    public function getOAuthAPIClient()
    {
        return Controllers\OAuthAPIClientController::getInstance();
    }
    /**
     * Singleton access to Documents controller
     * @return Controllers\DocumentsController The *Singleton* instance
     */
    public function getDocuments()
    {
        return Controllers\DocumentsController::getInstance();
    }
    /**
     * Singleton access to SignatureRolesCheck controller
     * @return Controllers\SignatureRolesCheckController The *Singleton* instance
     */
    public function getSignatureRolesCheck()
    {
        return Controllers\SignatureRolesCheckController::getInstance();
    }
    /**
     * Singleton access to Dealer controller
     * @return Controllers\DealerController The *Singleton* instance
     */
    public function getDealer()
    {
        return Controllers\DealerController::getInstance();
    }
    /**
     * Singleton access to BusinessRegistry controller
     * @return Controllers\BusinessRegistryController The *Singleton* instance
     */
    public function getBusinessRegistry()
    {
        return Controllers\BusinessRegistryController::getInstance();
    }
    /**
     * Singleton access to MobileInfo controller
     * @return Controllers\MobileInfoController The *Singleton* instance
     */
    public function getMobileInfo()
    {
        return Controllers\MobileInfoController::getInstance();
    }
    /**
     * Singleton access to Lei controller
     * @return Controllers\LeiController The *Singleton* instance
     */
    public function getLei()
    {
        return Controllers\LeiController::getInstance();
    }
    /**
     * Singleton access to Business controller
     * @return Controllers\BusinessController The *Singleton* instance
     */
    public function getBusiness()
    {
        return Controllers\BusinessController::getInstance();
    }
    /**
     * Singleton access to Log controller
     * @return Controllers\LogController The *Singleton* instance
     */
    public function getLog()
    {
        return Controllers\LogController::getInstance();
    }
    /**
     * Singleton access to Report controller
     * @return Controllers\ReportController The *Singleton* instance
     */
    public function getReport()
    {
        return Controllers\ReportController::getInstance();
    }
    /**
     * Singleton access to GeoData controller
     * @return Controllers\GeoDataController The *Singleton* instance
     */
    public function getGeoData()
    {
        return Controllers\GeoDataController::getInstance();
    }
    /**
     * Singleton access to Events controller
     * @return Controllers\EventsController The *Singleton* instance
     */
    public function getEvents()
    {
        return Controllers\EventsController::getInstance();
    }
    /**
     * Singleton access to Webhooks controller
     * @return Controllers\WebhooksController The *Singleton* instance
     */
    public function getWebhooks()
    {
        return Controllers\WebhooksController::getInstance();
    }
    /**
     * Singleton access to Signers controller
     * @return Controllers\SignersController The *Singleton* instance
     */
    public function getSigners()
    {
        return Controllers\SignersController::getInstance();
    }
    /**
     * Singleton access to Notifications controller
     * @return Controllers\NotificationsController The *Singleton* instance
     */
    public function getNotifications()
    {
        return Controllers\NotificationsController::getInstance();
    }
    /**
     * Singleton access to Jwt controller
     * @return Controllers\JwtController The *Singleton* instance
     */
    public function getJwt()
    {
        return Controllers\JwtController::getInstance();
    }
    /**
     * Singleton access to Files controller
     * @return Controllers\FilesController The *Singleton* instance
     */
    public function getFiles()
    {
        return Controllers\FilesController::getInstance();
    }
    /**
     * Singleton access to Attachments controller
     * @return Controllers\AttachmentsController The *Singleton* instance
     */
    public function getAttachments()
    {
        return Controllers\AttachmentsController::getInstance();
    }
    /**
     * Singleton access to Themes controller
     * @return Controllers\ThemesController The *Singleton* instance
     */
    public function getThemes()
    {
        return Controllers\ThemesController::getInstance();
    }
    /**
     * Singleton access to IdentificationSession controller
     * @return Controllers\IdentificationSessionController The *Singleton* instance
     */
    public function getIdentificationSession()
    {
        return Controllers\IdentificationSessionController::getInstance();
    }
    /**
     * Singleton access to OAuthAuthorization controller
     * @return Controllers\OAuthAuthorizationController The *Singleton* instance
     */
    public function getOAuthAuthorization()
    {
        return Controllers\OAuthAuthorizationController::getInstance();
    }

    /**
     * Get OAuth 2 authorization manager
     * @return OAuthManager
     */
    public function auth()
    {
        return OAuthManager::getInstance();
    }
}
