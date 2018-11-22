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
class DialogBefore implements JsonSerializable
{
    /**
     * Adds a checkbox the user have to check to confirm that the have read the dialog before they can
     * continue
     * @var bool|null $useCheckBox public property
     */
    public $useCheckBox;

    /**
     * The dialog title
     * @var string|null $title public property
     */
    public $title;

    /**
     * The dialog text
     * @var string|null $message public property
     */
    public $message;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param bool   $useCheckBox Initialization value for $this->useCheckBox
     * @param string $title       Initialization value for $this->title
     * @param string $message     Initialization value for $this->message
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->useCheckBox = func_get_arg(0);
            $this->title       = func_get_arg(1);
            $this->message     = func_get_arg(2);
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
        $json['useCheckBox'] = $this->useCheckBox;
        $json['title']       = $this->title;
        $json['message']     = $this->message;

        return array_merge($json, $this->additionalProperties);
    }
}
