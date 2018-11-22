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
class PdfTemplateListItem implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @maps Id
     * @var string $id public property
     */
    public $id;

    /**
     * The name of the Pdf template
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * Timestamp when the template is last edited
     * @maps LastEdited
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastEdited public property
     */
    public $lastEdited;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $id         Initialization value for $this->id
     * @param string    $name       Initialization value for $this->name
     * @param \DateTime $lastEdited Initialization value for $this->lastEdited
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->id         = func_get_arg(0);
            $this->name       = func_get_arg(1);
            $this->lastEdited = func_get_arg(2);
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
        $json['Id']         = $this->id;
        $json['Name']       = $this->name;
        $json['LastEdited'] = isset($this->lastEdited) ?
            DateTimeHelper::toRfc3339DateTime($this->lastEdited) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
