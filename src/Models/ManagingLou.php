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
class ManagingLou implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Lei
     * @var string|null $lei public property
     */
    public $lei;

    /**
     * @todo Write general description for this property
     * @maps Prefix
     * @var string|null $prefix public property
     */
    public $prefix;

    /**
     * @todo Write general description for this property
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * @todo Write general description for this property
     * @maps Website
     * @var string|null $website public property
     */
    public $website;

    /**
     * @todo Write general description for this property
     * @maps Operational
     * @var string|null $operational public property
     */
    public $operational;

    /**
     * @todo Write general description for this property
     * @maps EndorsementDate
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $endorsementDate public property
     */
    public $endorsementDate;

    /**
     * @todo Write general description for this property
     * @maps Sponsor
     * @var string|null $sponsor public property
     */
    public $sponsor;

    /**
     * @todo Write general description for this property
     * @maps SponsorCountry
     * @var string|null $sponsorCountry public property
     */
    public $sponsorCountry;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $lei             Initialization value for $this->lei
     * @param string    $prefix          Initialization value for $this->prefix
     * @param string    $name            Initialization value for $this->name
     * @param string    $website         Initialization value for $this->website
     * @param string    $operational     Initialization value for $this->operational
     * @param \DateTime $endorsementDate Initialization value for $this->endorsementDate
     * @param string    $sponsor         Initialization value for $this->sponsor
     * @param string    $sponsorCountry  Initialization value for $this->sponsorCountry
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->lei             = func_get_arg(0);
            $this->prefix          = func_get_arg(1);
            $this->name            = func_get_arg(2);
            $this->website         = func_get_arg(3);
            $this->operational     = func_get_arg(4);
            $this->endorsementDate = func_get_arg(5);
            $this->sponsor         = func_get_arg(6);
            $this->sponsorCountry  = func_get_arg(7);
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
        $json['Lei']             = $this->lei;
        $json['Prefix']          = $this->prefix;
        $json['Name']            = $this->name;
        $json['Website']         = $this->website;
        $json['Operational']     = $this->operational;
        $json['EndorsementDate'] = isset($this->endorsementDate) ?
            DateTimeHelper::toRfc3339DateTime($this->endorsementDate) : null;
        $json['Sponsor']         = $this->sponsor;
        $json['SponsorCountry']  = $this->sponsorCountry;

        return array_merge($json, $this->additionalProperties);
    }
}
