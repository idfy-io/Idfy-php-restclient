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
class WebhookDto implements JsonSerializable
{
    /**
     * The webhooks unique identifier.
     * @var integer|null $id public property
     */
    public $id;

    /**
     * Display name of the webhook.
     * @var string|null $name public property
     */
    public $name;

    /**
     * Determines if the webhook is active.
     * @var bool|null $active public property
     */
    public $active;

    /**
     * A list of events that the webhook triggers for.
     * @var array|null $events public property
     */
    public $events;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\WebhookConfig|null $config public property
     */
    public $config;

    /**
     * Time at which the webhook was created.
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $createdAt public property
     */
    public $createdAt;

    /**
     * Time at which the webhook was last updated.
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $updatedAt public property
     */
    public $updatedAt;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\WebhookResponse|null $lastResponse public property
     */
    public $lastResponse;

    /**
     * A list of event tags that the webhook triggers for.
     * @var array|null $tags public property
     */
    public $tags;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer          $id           Initialization value for $this->id
     * @param string           $name         Initialization value for $this->name
     * @param bool             $active       Initialization value for $this->active
     * @param array            $events       Initialization value for $this->events
     * @param WebhookConfig    $config       Initialization value for $this->config
     * @param \DateTime        $createdAt    Initialization value for $this->createdAt
     * @param \DateTime        $updatedAt    Initialization value for $this->updatedAt
     * @param WebhookResponse  $lastResponse Initialization value for $this->lastResponse
     * @param array            $tags         Initialization value for $this->tags
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->id           = func_get_arg(0);
            $this->name         = func_get_arg(1);
            $this->active       = func_get_arg(2);
            $this->events       = func_get_arg(3);
            $this->config       = func_get_arg(4);
            $this->createdAt    = func_get_arg(5);
            $this->updatedAt    = func_get_arg(6);
            $this->lastResponse = func_get_arg(7);
            $this->tags         = func_get_arg(8);
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
        $json['id']           = $this->id;
        $json['name']         = $this->name;
        $json['active']       = $this->active;
        $json['events']       = $this->events;
        $json['config']       = $this->config;
        $json['createdAt']    = isset($this->createdAt) ?
            DateTimeHelper::toRfc3339DateTime($this->createdAt) : null;
        $json['updatedAt']    = isset($this->updatedAt) ?
            DateTimeHelper::toRfc3339DateTime($this->updatedAt) : null;
        $json['lastResponse'] = $this->lastResponse;
        $json['tags']         = $this->tags;

        return array_merge($json, $this->additionalProperties);
    }
}
