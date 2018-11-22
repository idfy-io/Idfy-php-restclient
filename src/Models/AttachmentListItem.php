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
class AttachmentListItem implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @var string|null $title public property
     */
    public $title;

    /**
     * @todo Write general description for this property
     * @var string|null $description public property
     */
    public $description;

    /**
     * @todo Write general description for this property
     * @var string|null $type public property
     */
    public $type;

    /**
     * @todo Write general description for this property
     * @var string|null $fileName public property
     */
    public $fileName;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $id          Initialization value for $this->id
     * @param string $title       Initialization value for $this->title
     * @param string $description Initialization value for $this->description
     * @param string $type        Initialization value for $this->type
     * @param string $fileName    Initialization value for $this->fileName
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->id          = func_get_arg(0);
            $this->title       = func_get_arg(1);
            $this->description = func_get_arg(2);
            $this->type        = func_get_arg(3);
            $this->fileName    = func_get_arg(4);
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
        $json['id']          = $this->id;
        $json['title']       = $this->title;
        $json['description'] = $this->description;
        $json['type']        = $this->type;
        $json['fileName']    = $this->fileName;

        return array_merge($json, $this->additionalProperties);
    }
}
