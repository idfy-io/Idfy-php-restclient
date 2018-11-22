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
class AccountSearchFilter implements JsonSerializable
{
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
     * @maps CreatedBefore
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $createdBefore public property
     */
    public $createdBefore;

    /**
     * @todo Write general description for this property
     * @maps CreatedAfter
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $createdAfter public property
     */
    public $createdAfter;

    /**
     * @todo Write general description for this property
     * @maps LastModifiedBefore
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastModifiedBefore public property
     */
    public $lastModifiedBefore;

    /**
     * @todo Write general description for this property
     * @maps LastModifiedAfter
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastModifiedAfter public property
     */
    public $lastModifiedAfter;

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
     * @param string    $name               Initialization value for $this->name
     * @param string    $orgNo              Initialization value for $this->orgNo
     * @param string    $uniCustomerNo      Initialization value for $this->uniCustomerNo
     * @param \DateTime $createdBefore      Initialization value for $this->createdBefore
     * @param \DateTime $createdAfter       Initialization value for $this->createdAfter
     * @param \DateTime $lastModifiedBefore Initialization value for $this->lastModifiedBefore
     * @param \DateTime $lastModifiedAfter  Initialization value for $this->lastModifiedAfter
     * @param string    $dealerName         Initialization value for $this->dealerName
     * @param string    $dealerReference    Initialization value for $this->dealerReference
     * @param bool      $enabled            Initialization value for $this->enabled
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->name               = func_get_arg(0);
            $this->orgNo              = func_get_arg(1);
            $this->uniCustomerNo      = func_get_arg(2);
            $this->createdBefore      = func_get_arg(3);
            $this->createdAfter       = func_get_arg(4);
            $this->lastModifiedBefore = func_get_arg(5);
            $this->lastModifiedAfter  = func_get_arg(6);
            $this->dealerName         = func_get_arg(7);
            $this->dealerReference    = func_get_arg(8);
            $this->enabled            = func_get_arg(9);
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
        $json['Name']               = $this->name;
        $json['OrgNo']              = $this->orgNo;
        $json['UniCustomerNo']      = $this->uniCustomerNo;
        $json['CreatedBefore']      = isset($this->createdBefore) ?
            DateTimeHelper::toRfc3339DateTime($this->createdBefore) : null;
        $json['CreatedAfter']       = isset($this->createdAfter) ?
            DateTimeHelper::toRfc3339DateTime($this->createdAfter) : null;
        $json['LastModifiedBefore'] = isset($this->lastModifiedBefore) ?
            DateTimeHelper::toRfc3339DateTime($this->lastModifiedBefore) : null;
        $json['LastModifiedAfter']  = isset($this->lastModifiedAfter) ?
            DateTimeHelper::toRfc3339DateTime($this->lastModifiedAfter) : null;
        $json['DealerName']         = $this->dealerName;
        $json['DealerReference']    = $this->dealerReference;
        $json['Enabled']            = $this->enabled;

        return array_merge($json, $this->additionalProperties);
    }
}
