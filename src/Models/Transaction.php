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
class Transaction implements JsonSerializable
{
    /**
     * Transaction ID
     * @maps ID
     * @var string|null $iD public property
     */
    public $iD;

    /**
     * The date for the transaction
     * @maps Date
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $date public property
     */
    public $date;

    /**
     * Product ID (SIGN, IDENTIFICATION etc)
     * @maps ProductID
     * @var string|null $productID public property
     */
    public $productID;

    /**
     * Transaction description
     * @maps Description
     * @var string|null $description public property
     */
    public $description;

    /**
     * Number of transactions for the selected date
     * @maps Count
     * @var integer|null $count public property
     */
    public $count;

    /**
     * Your customer number in our invocing system
     * @maps CustomerNumber
     * @var integer|null $customerNumber public property
     */
    public $customerNumber;

    /**
     * Your reference to the transaction (by ExternalRef in the API call)
     * @maps ExternalReference
     * @var string|null $externalReference public property
     */
    public $externalReference;

    /**
     * The Departments ID if specified
     * @maps DepartmentId
     * @var string|null $departmentId public property
     */
    public $departmentId;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $iD                Initialization value for $this->iD
     * @param \DateTime $date              Initialization value for $this->date
     * @param string    $productID         Initialization value for $this->productID
     * @param string    $description       Initialization value for $this->description
     * @param integer   $count             Initialization value for $this->count
     * @param integer   $customerNumber    Initialization value for $this->customerNumber
     * @param string    $externalReference Initialization value for $this->externalReference
     * @param string    $departmentId      Initialization value for $this->departmentId
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->iD                = func_get_arg(0);
            $this->date              = func_get_arg(1);
            $this->productID         = func_get_arg(2);
            $this->description       = func_get_arg(3);
            $this->count             = func_get_arg(4);
            $this->customerNumber    = func_get_arg(5);
            $this->externalReference = func_get_arg(6);
            $this->departmentId      = func_get_arg(7);
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
        $json['ID']                = $this->iD;
        $json['Date']              = isset($this->date) ?
            DateTimeHelper::toRfc3339DateTime($this->date) : null;
        $json['ProductID']         = $this->productID;
        $json['Description']       = $this->description;
        $json['Count']             = $this->count;
        $json['CustomerNumber']    = $this->customerNumber;
        $json['ExternalReference'] = $this->externalReference;
        $json['DepartmentId']      = $this->departmentId;

        return array_merge($json, $this->additionalProperties);
    }
}
