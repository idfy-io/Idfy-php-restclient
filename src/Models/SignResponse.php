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
class SignResponse implements JsonSerializable
{
    /**
     * base 64 encoded signed data
     * @var string|null $signedData public property
     */
    public $signedData;

    /**
     * Reference Id to audit log
     * @var string|null $auditLogReference public property
     */
    public $auditLogReference;

    /**
     * Signing format
     * @var string|null $signingFormat public property
     */
    public $signingFormat;

    /**
     * Error message
     * @var \IdfyLib\Models\MerchantError|null $error public property
     */
    public $error;

    /**
     * Signed with certificate
     * @var string|null $signCertificateBase64String public property
     */
    public $signCertificateBase64String;

    /**
     * Id to look up the transaction at a later time
     * @var string|null $transactionId public property
     */
    public $transactionId;

    /**
     * Id to retrieve signed file (pades)
     * @var string|null $signedDocumentId public property
     */
    public $signedDocumentId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string        $signedData                  Initialization value for $this->signedData
     * @param string        $auditLogReference           Initialization value for $this->auditLogReference
     * @param string        $signingFormat               Initialization value for $this->signingFormat
     * @param MerchantError $error                       Initialization value for $this->error
     * @param string        $signCertificateBase64String Initialization value for $this->signCertificateBase64String
     * @param string        $transactionId               Initialization value for $this->transactionId
     * @param string        $signedDocumentId            Initialization value for $this->signedDocumentId
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->signedData                  = func_get_arg(0);
            $this->auditLogReference           = func_get_arg(1);
            $this->signingFormat               = func_get_arg(2);
            $this->error                       = func_get_arg(3);
            $this->signCertificateBase64String = func_get_arg(4);
            $this->transactionId               = func_get_arg(5);
            $this->signedDocumentId            = func_get_arg(6);
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
        $json['signedData']                  = $this->signedData;
        $json['auditLogReference']           = $this->auditLogReference;
        $json['signingFormat']               = $this->signingFormat;
        $json['error']                       = $this->error;
        $json['signCertificateBase64String'] = $this->signCertificateBase64String;
        $json['transactionId']               = $this->transactionId;
        $json['signedDocumentId']            = $this->signedDocumentId;

        return array_merge($json, $this->additionalProperties);
    }
}
