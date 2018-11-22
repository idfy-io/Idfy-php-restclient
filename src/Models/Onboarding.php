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
class Onboarding implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Heading
     * @var string|null $heading public property
     */
    public $heading;

    /**
     * @todo Write general description for this property
     * @maps LeadParagraph
     * @var string|null $leadParagraph public property
     */
    public $leadParagraph;

    /**
     * @todo Write general description for this property
     * @maps LogoUrl
     * @var string|null $logoUrl public property
     */
    public $logoUrl;

    /**
     * @todo Write general description for this property
     * @maps ReturnUrl
     * @var string|null $returnUrl public property
     */
    public $returnUrl;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $heading       Initialization value for $this->heading
     * @param string $leadParagraph Initialization value for $this->leadParagraph
     * @param string $logoUrl       Initialization value for $this->logoUrl
     * @param string $returnUrl     Initialization value for $this->returnUrl
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->heading       = func_get_arg(0);
            $this->leadParagraph = func_get_arg(1);
            $this->logoUrl       = func_get_arg(2);
            $this->returnUrl     = func_get_arg(3);
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
        $json['Heading']       = $this->heading;
        $json['LeadParagraph'] = $this->leadParagraph;
        $json['LogoUrl']       = $this->logoUrl;
        $json['ReturnUrl']     = $this->returnUrl;

        return array_merge($json, $this->additionalProperties);
    }
}
