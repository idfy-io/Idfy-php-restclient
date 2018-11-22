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
class PadesSettings implements JsonSerializable
{
    /**
     * Set the primary language of the pades explanatory page. Defaults to english
     * @var string|null $primaryLanguage public property
     */
    public $primaryLanguage;

    /**
     * Set the secondary language of the pades explanatory page.
     * @var string|null $secondaryLanguage public property
     */
    public $secondaryLanguage;

    /**
     * Include your own pades template
     * @var string|null $padesTemplateId public property
     */
    public $padesTemplateId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $primaryLanguage   Initialization value for $this->primaryLanguage
     * @param string $secondaryLanguage Initialization value for $this->secondaryLanguage
     * @param string $padesTemplateId   Initialization value for $this->padesTemplateId
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->primaryLanguage   = func_get_arg(0);
            $this->secondaryLanguage = func_get_arg(1);
            $this->padesTemplateId   = func_get_arg(2);
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
        $json['primaryLanguage']   = $this->primaryLanguage;
        $json['secondaryLanguage'] = $this->secondaryLanguage;
        $json['padesTemplateId']   = $this->padesTemplateId;

        return array_merge($json, $this->additionalProperties);
    }
}
