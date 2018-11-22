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
class DifiResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @maps Organizations
     * @var \IdfyLib\Models\CompanyInfoDifiResponse[]|null $organizations public property
     */
    public $organizations;

    /**
     * @todo Write general description for this property
     * @maps RawData
     * @var string|null $rawData public property
     */
    public $rawData;

    /**
     * @todo Write general description for this property
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array  $organizations Initialization value for $this->organizations
     * @param string $rawData       Initialization value for $this->rawData
     * @param string $requestId     Initialization value for $this->requestId
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->organizations = func_get_arg(0);
            $this->rawData       = func_get_arg(1);
            $this->requestId     = func_get_arg(2);
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
        $json['Organizations'] = $this->organizations;
        $json['RawData']       = $this->rawData;
        $json['RequestId']     = $this->requestId;

        return array_merge($json, $this->additionalProperties);
    }
}
