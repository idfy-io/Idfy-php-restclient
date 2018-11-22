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
class JwtPayload implements JsonSerializable
{
    /**
     * Account Id
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * Document Id
     * @var string|null $documentId public property
     */
    public $documentId;

    /**
     * External document Id
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * Signer Id
     * @var string|null $signerId public property
     */
    public $signerId;

    /**
     * External signer Id
     * @var string|null $externalSignerId public property
     */
    public $externalSignerId;

    /**
     * Error object, will be included on error
     * @var \IdfyLib\Models\SignatureError|null $error public property
     */
    public $error;

    /**
     * Success object, will be included on sign success
     * @var \IdfyLib\Models\SignSuccess|null $signSuccess public property
     */
    public $signSuccess;

    /**
     * When the jwt expires (ISO 8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $expires public property
     */
    public $expires;

    /**
     * Set to true if user aborted
     * @var bool|null $aborted public property
     */
    public $aborted;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string          $accountId        Initialization value for $this->accountId
     * @param string          $documentId       Initialization value for $this->documentId
     * @param string          $externalId       Initialization value for $this->externalId
     * @param string          $signerId         Initialization value for $this->signerId
     * @param string          $externalSignerId Initialization value for $this->externalSignerId
     * @param SignatureError  $error            Initialization value for $this->error
     * @param SignSuccess     $signSuccess      Initialization value for $this->signSuccess
     * @param \DateTime       $expires          Initialization value for $this->expires
     * @param bool            $aborted          Initialization value for $this->aborted
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->accountId        = func_get_arg(0);
            $this->documentId       = func_get_arg(1);
            $this->externalId       = func_get_arg(2);
            $this->signerId         = func_get_arg(3);
            $this->externalSignerId = func_get_arg(4);
            $this->error            = func_get_arg(5);
            $this->signSuccess      = func_get_arg(6);
            $this->expires          = func_get_arg(7);
            $this->aborted          = func_get_arg(8);
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
        $json['accountId']        = $this->accountId;
        $json['documentId']       = $this->documentId;
        $json['externalId']       = $this->externalId;
        $json['signerId']         = $this->signerId;
        $json['externalSignerId'] = $this->externalSignerId;
        $json['error']            = $this->error;
        $json['signSuccess']      = $this->signSuccess;
        $json['expires']          = isset($this->expires) ?
            DateTimeHelper::toRfc3339DateTime($this->expires) : null;
        $json['aborted']          = $this->aborted;

        return array_merge($json, $this->additionalProperties);
    }
}
