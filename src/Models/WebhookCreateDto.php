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
class WebhookCreateDto implements JsonSerializable
{
    /**
     * Display name of the webhook.
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Determines whether the webhook is active or not.
     * @required
     * @var bool $active public property
     */
    public $active;

    /**
     * A list of events that the webhook triggers for.
     * @required
     * @var array $events public property
     */
    public $events;

    /**
     * @todo Write general description for this property
     * @required
     * @var \IdfyLib\Models\WebhookCreateConfig $config public property
     */
    public $config;

    /**
     * An optional list of event tags that the webhook triggers for.
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
     * @param string              $name   Initialization value for $this->name
     * @param bool                $active Initialization value for $this->active
     * @param array               $events Initialization value for $this->events
     * @param WebhookCreateConfig $config Initialization value for $this->config
     * @param array               $tags   Initialization value for $this->tags
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->name   = func_get_arg(0);
            $this->active = func_get_arg(1);
            $this->events = func_get_arg(2);
            $this->config = func_get_arg(3);
            $this->tags   = func_get_arg(4);
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
        $json['name']   = $this->name;
        $json['active'] = $this->active;
        $json['events'] = $this->events;
        $json['config'] = $this->config;
        $json['tags']   = $this->tags;

        return array_merge($json, $this->additionalProperties);
    }
}
