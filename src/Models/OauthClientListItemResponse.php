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
class OauthClientListItemResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps ClientId
     * @var string|null $clientId public property
     */
    public $clientId;

    /**
     * @todo Write general description for this property
     * @maps Enabled
     * @var bool|null $enabled public property
     */
    public $enabled;

    /**
     * @todo Write general description for this property
     * @maps ClientName
     * @var string|null $clientName public property
     */
    public $clientName;

    /**
     * @todo Write general description for this property
     * @maps AccountId
     * @var string|null $accountId public property
     */
    public $accountId;

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
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $clientId    Initialization value for $this->clientId
     * @param bool      $enabled     Initialization value for $this->enabled
     * @param string    $clientName  Initialization value for $this->clientName
     * @param string    $accountId   Initialization value for $this->accountId
     * @param \DateTime $created     Initialization value for $this->created
     * @param \DateTime $lastChanged Initialization value for $this->lastChanged
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->clientId    = func_get_arg(0);
            $this->enabled     = func_get_arg(1);
            $this->clientName  = func_get_arg(2);
            $this->accountId   = func_get_arg(3);
            $this->created     = func_get_arg(4);
            $this->lastChanged = func_get_arg(5);
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
        $json['ClientId']    = $this->clientId;
        $json['Enabled']     = $this->enabled;
        $json['ClientName']  = $this->clientName;
        $json['AccountId']   = $this->accountId;
        $json['Created']     = isset($this->created) ?
            DateTimeHelper::toRfc3339DateTime($this->created) : null;
        $json['LastChanged'] = isset($this->lastChanged) ?
            DateTimeHelper::toRfc3339DateTime($this->lastChanged) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
