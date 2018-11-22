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
class AccountListItem implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps AccountId
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps OrgNo
     * @var string|null $orgNo public property
     */
    public $orgNo;

    /**
     * @todo Write general description for this property
     * @maps UniCustomerNo
     * @var string|null $uniCustomerNo public property
     */
    public $uniCustomerNo;

    /**
     * @todo Write general description for this property
     * @maps Created
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $created public property
     */
    public $created;

    /**
     * @todo Write general description for this property
     * @maps LastModified
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastModified public property
     */
    public $lastModified;

    /**
     * @todo Write general description for this property
     * @maps DealerId
     * @var string|null $dealerId public property
     */
    public $dealerId;

    /**
     * @todo Write general description for this property
     * @maps DealerName
     * @var string|null $dealerName public property
     */
    public $dealerName;

    /**
     * @todo Write general description for this property
     * @maps DealerReference
     * @var string|null $dealerReference public property
     */
    public $dealerReference;

    /**
     * @todo Write general description for this property
     * @maps Enabled
     * @var bool|null $enabled public property
     */
    public $enabled;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $accountId       Initialization value for $this->accountId
     * @param string    $name            Initialization value for $this->name
     * @param string    $orgNo           Initialization value for $this->orgNo
     * @param string    $uniCustomerNo   Initialization value for $this->uniCustomerNo
     * @param \DateTime $created         Initialization value for $this->created
     * @param \DateTime $lastModified    Initialization value for $this->lastModified
     * @param string    $dealerId        Initialization value for $this->dealerId
     * @param string    $dealerName      Initialization value for $this->dealerName
     * @param string    $dealerReference Initialization value for $this->dealerReference
     * @param bool      $enabled         Initialization value for $this->enabled
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->accountId       = func_get_arg(0);
            $this->name            = func_get_arg(1);
            $this->orgNo           = func_get_arg(2);
            $this->uniCustomerNo   = func_get_arg(3);
            $this->created         = func_get_arg(4);
            $this->lastModified    = func_get_arg(5);
            $this->dealerId        = func_get_arg(6);
            $this->dealerName      = func_get_arg(7);
            $this->dealerReference = func_get_arg(8);
            $this->enabled         = func_get_arg(9);
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
        $json['AccountId']       = $this->accountId;
        $json['Name']            = $this->name;
        $json['OrgNo']           = $this->orgNo;
        $json['UniCustomerNo']   = $this->uniCustomerNo;
        $json['Created']         = isset($this->created) ?
            DateTimeHelper::toRfc3339DateTime($this->created) : null;
        $json['LastModified']    = isset($this->lastModified) ?
            DateTimeHelper::toRfc3339DateTime($this->lastModified) : null;
        $json['DealerId']        = $this->dealerId;
        $json['DealerName']      = $this->dealerName;
        $json['DealerReference'] = $this->dealerReference;
        $json['Enabled']         = $this->enabled;

        return array_merge($json, $this->additionalProperties);
    }
}
