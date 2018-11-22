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
class TimeToLive implements JsonSerializable
{
    /**
     * Define when the document should expire (ISO 8601), document is not signable after this
     * (Default/maximum 45 days)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deadline public property
     */
    public $deadline;

    /**
     * How many hours should we keep the document after it is signed? Default/ maximum  7 days (168 hours)
     * @var integer|null $deleteAfterHours public property
     */
    public $deleteAfterHours;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param \DateTime $deadline         Initialization value for $this->deadline
     * @param integer   $deleteAfterHours Initialization value for $this->deleteAfterHours
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->deadline         = func_get_arg(0);
            $this->deleteAfterHours = func_get_arg(1);
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
        $json['deadline']         = isset($this->deadline) ?
            DateTimeHelper::toRfc3339DateTime($this->deadline) : null;
        $json['deleteAfterHours'] = $this->deleteAfterHours;

        return array_merge($json, $this->additionalProperties);
    }
}
