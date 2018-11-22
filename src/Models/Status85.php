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
class Status85 implements JsonSerializable
{
    /**
     * The overall status for the document
     * @var string|null $documentStatus public property
     */
    public $documentStatus;

    /**
     * A list of all the completed files/packages on the main document.
     * @var array|null $completedPackages public property
     */
    public $completedPackages;

    /**
     * A dictionary with all the completed packages for the signable attachments. The dictionary key equals
     * the attachment Id.
     * @var array|null $attachmentPackages public property
     */
    public $attachmentPackages;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $documentStatus     Initialization value for $this->documentStatus
     * @param array  $completedPackages  Initialization value for $this->completedPackages
     * @param array  $attachmentPackages Initialization value for $this->attachmentPackages
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->documentStatus     = func_get_arg(0);
            $this->completedPackages  = func_get_arg(1);
            $this->attachmentPackages = func_get_arg(2);
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
        $json['documentStatus']     = $this->documentStatus;
        $json['completedPackages']  = $this->completedPackages;
        $json['attachmentPackages'] = $this->attachmentPackages;

        return array_merge($json, $this->additionalProperties);
    }
}
