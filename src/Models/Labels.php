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
class Labels implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var array|null $en public property
     */
    public $en;

    /**
     * @todo Write general description for this property
     * @var array|null $no public property
     */
    public $no;

    /**
     * @todo Write general description for this property
     * @var array|null $sv public property
     */
    public $sv;

    /**
     * @todo Write general description for this property
     * @var array|null $da public property
     */
    public $da;

    /**
     * @todo Write general description for this property
     * @var array|null $fi public property
     */
    public $fi;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array $en Initialization value for $this->en
     * @param array $no Initialization value for $this->no
     * @param array $sv Initialization value for $this->sv
     * @param array $da Initialization value for $this->da
     * @param array $fi Initialization value for $this->fi
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->en = func_get_arg(0);
            $this->no = func_get_arg(1);
            $this->sv = func_get_arg(2);
            $this->da = func_get_arg(3);
            $this->fi = func_get_arg(4);
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
        $json['en'] = $this->en;
        $json['no'] = $this->no;
        $json['sv'] = $this->sv;
        $json['da'] = $this->da;
        $json['fi'] = $this->fi;

        return array_merge($json, $this->additionalProperties);
    }
}
