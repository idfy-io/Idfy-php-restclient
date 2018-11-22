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
class MerchantSignTransaction implements JsonSerializable
{
    /**
     * Transaction Id
     * @var string|null $id public property
     */
    public $id;

    /**
     * Your account Id
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * Audit log Id
     * @var string|null $auditLogReference public property
     */
    public $auditLogReference;

    /**
     * External Reference
     * @var string|null $externalReference public property
     */
    public $externalReference;

    /**
     * The oauth client used in this transaction
     * @var string|null $oauthClientId public property
     */
    public $oauthClientId;

    /**
     * Ip address
     * @var string|null $ipAddress public property
     */
    public $ipAddress;

    /**
     * Xslt sha256 hash
     * @var string|null $xslt public property
     */
    public $xslt;

    /**
     * Data to sign sha256 hash
     * @var string|null $dataToSign public property
     */
    public $dataToSign;

    /**
     * Signed data sha256 hash
     * @var string|null $result public property
     */
    public $result;

    /**
     * Certificate
     * @var string|null $certificate public property
     */
    public $certificate;

    /**
     * Log save time
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $timeStamp public property
     */
    public $timeStamp;

    /**
     * For pades retrieval
     * @var string|null $signedDocumentId public property
     */
    public $signedDocumentId;

    /**
     * @todo Write general description for this property
     * @var bool|null $padesCreated public property
     */
    public $padesCreated;

    /**
     * @todo Write general description for this property
     * @var bool|null $padesRetrieved public property
     */
    public $padesRetrieved;

    /**
     * @todo Write general description for this property
     * @var bool|null $padesDeleted public property
     */
    public $padesDeleted;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id                Initialization value for $this->id
     * @param string    $accountId         Initialization value for $this->accountId
     * @param string    $auditLogReference Initialization value for $this->auditLogReference
     * @param string    $externalReference Initialization value for $this->externalReference
     * @param string    $oauthClientId     Initialization value for $this->oauthClientId
     * @param string    $ipAddress         Initialization value for $this->ipAddress
     * @param string    $xslt              Initialization value for $this->xslt
     * @param string    $dataToSign        Initialization value for $this->dataToSign
     * @param string    $result            Initialization value for $this->result
     * @param string    $certificate       Initialization value for $this->certificate
     * @param \DateTime $timeStamp         Initialization value for $this->timeStamp
     * @param string    $signedDocumentId  Initialization value for $this->signedDocumentId
     * @param bool      $padesCreated      Initialization value for $this->padesCreated
     * @param bool      $padesRetrieved    Initialization value for $this->padesRetrieved
     * @param bool      $padesDeleted      Initialization value for $this->padesDeleted
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->id                = func_get_arg(0);
            $this->accountId         = func_get_arg(1);
            $this->auditLogReference = func_get_arg(2);
            $this->externalReference = func_get_arg(3);
            $this->oauthClientId     = func_get_arg(4);
            $this->ipAddress         = func_get_arg(5);
            $this->xslt              = func_get_arg(6);
            $this->dataToSign        = func_get_arg(7);
            $this->result            = func_get_arg(8);
            $this->certificate       = func_get_arg(9);
            $this->timeStamp         = func_get_arg(10);
            $this->signedDocumentId  = func_get_arg(11);
            $this->padesCreated      = func_get_arg(12);
            $this->padesRetrieved    = func_get_arg(13);
            $this->padesDeleted      = func_get_arg(14);
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
        $json['id']                = $this->id;
        $json['accountId']         = $this->accountId;
        $json['auditLogReference'] = $this->auditLogReference;
        $json['externalReference'] = $this->externalReference;
        $json['oauthClientId']     = $this->oauthClientId;
        $json['ipAddress']         = $this->ipAddress;
        $json['xslt']              = $this->xslt;
        $json['dataToSign']        = $this->dataToSign;
        $json['result']            = $this->result;
        $json['certificate']       = $this->certificate;
        $json['timeStamp']         = isset($this->timeStamp) ?
            DateTimeHelper::toRfc3339DateTime($this->timeStamp) : null;
        $json['signedDocumentId']  = $this->signedDocumentId;
        $json['padesCreated']      = $this->padesCreated;
        $json['padesRetrieved']    = $this->padesRetrieved;
        $json['padesDeleted']      = $this->padesDeleted;

        return array_merge($json, $this->additionalProperties);
    }
}
