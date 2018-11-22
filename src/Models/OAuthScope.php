<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

/**
 * OAuth 2 scopes supported by the API
 */
class OAuthScope
{
    /**
     * Grants access to information endpoint.
     */
    const ADDONS = "addons";

    /**
     * Grants read-only access to admin endpoint.
     */
    const ACCOUNT_READ = "account_read";

    /**
     * Grants write access to admin endpoint.
     */
    const ACCOUNT_WRITE = "account_write";

    /**
     * Grants read/write access to manage OAuth clients
     */
    const OAUTH_WRITE = "oauth_write";

    /**
     * Grants read/write access to manage OpenID clients
     */
    const OPENID_WRITE = "openid_write";

    /**
     * Account create
     */
    const ACCOUNT_CREATE = "account-create";

    /**
     * Grants read/write access to identification endpoint.
     */
    const IDENTIFY = "identify";

    /**
     * Grants read-only access to documents.
     */
    const DOCUMENT_READ = "document_read";

    /**
     * Grants write access to documents.
     */
    const DOCUMENT_WRITE = "document_write";

    /**
     * Grants access to download documents.
     */
    const DOCUMENT_FILE = "document_file";

    /**
     * Grants write access to forms.
     */
    const FORM_WRITE = "form_write";

    /**
     * Grants read-only access to forms.
     */
    const FORM_READ = "form_read";

    /**
     * Grants access to download forms.
     */
    const FORM_FILE = "form_file";

    /**
     * Grants full access to notification endpoint.
     */
    const EVENT = "event";

    /**
     * Invoice
     */
    const INVOICE = "invoice";

    /**
     * Analytics
     */
    const ANALYTICS = "analytics";

    /**
     * Grants full access to audit endpoint.
     */
    const AUDIT_ROOT = "audit_root";

    /**
     * Grants read-only access to audit endpoint.
     */
    const AUDIT_READ = "audit_read";

    /**
     * Grants write access to audit endpoint.
     */
    const AUDIT_WRITE = "audit_write";

    /**
     * Grants full access to merchant signature endpoint.
     */
    const MERCHANTSIGN = "merchantsign";

    /**
     * Grants full access to validation endpoint.
     */
    const VALIDATION = "validation";

    /**
     * Grants full access to validation endpoint with social security number.
     */
    const VALIDATION_SSN = "validation_ssn";

    /**
     * Grants read-only access to text endpoint.
     */
    const TEXT_READ = "text_read";

    /**
     * Grants write access to text endpoint.
     */
    const TEXT_WRITE = "text_write";
}
