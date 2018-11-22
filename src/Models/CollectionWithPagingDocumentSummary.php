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
class CollectionWithPagingDocumentSummary implements JsonSerializable
{
    /**
     * The offset of the current page.
     * @var integer|null $offset public property
     */
    public $offset;

    /**
     * The limit of the current paging options.
     * @var integer|null $limit public property
     */
    public $limit;

    /**
     * The total size of the collection (irrespective of any paging options).
     * @var integer|null $size public property
     */
    public $size;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Links|null $links public property
     */
    public $links;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\DocumentSummary[]|null $data public property
     */
    public $data;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $offset Initialization value for $this->offset
     * @param integer $limit  Initialization value for $this->limit
     * @param integer $size   Initialization value for $this->size
     * @param Links   $links  Initialization value for $this->links
     * @param array   $data   Initialization value for $this->data
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->offset = func_get_arg(0);
            $this->limit  = func_get_arg(1);
            $this->size   = func_get_arg(2);
            $this->links  = func_get_arg(3);
            $this->data   = func_get_arg(4);
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
        $json['offset'] = $this->offset;
        $json['limit']  = $this->limit;
        $json['size']   = $this->size;
        $json['links']  = $this->links;
        $json['data']   = $this->data;

        return array_merge($json, $this->additionalProperties);
    }
}
