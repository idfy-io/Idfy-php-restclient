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
 *Data retrieved before the actual screening (data enhancement).
 */
class VerifiedPerson implements JsonSerializable
{
    /**
     * Person status code, e.g. DECEASED, EMIGRATED
     * @var array|null $status public property
     */
    public $status;

    /**
     * Date of death
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deceasedDate public property
     */
    public $deceasedDate;

    /**
     * Date of emigration
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $emigratedDate public property
     */
    public $emigratedDate;

    /**
     * Role in company
     * @var string|null $role public property
     */
    public $role;

    /**
     * Name of data provider
     * @var string|null $provider public property
     */
    public $provider;

    /**
     * Name of person
     * @var string|null $name public property
     */
    public $name;

    /**
     * Gender of person
     * @var string|null $gender public property
     */
    public $gender;

    /**
     * National Identification Number
     * @var string|null $natIdNo public property
     */
    public $natIdNo;

    /**
     * Two-letter code as specified in the ISO 3166 standard
     * @var string|null $nationality public property
     */
    public $nationality;

    /**
     * Date of birth for the person
     * @var string|null $birthDate public property
     */
    public $birthDate;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param array     $status        Initialization value for $this->status
     * @param \DateTime $deceasedDate  Initialization value for $this->deceasedDate
     * @param \DateTime $emigratedDate Initialization value for $this->emigratedDate
     * @param string    $role          Initialization value for $this->role
     * @param string    $provider      Initialization value for $this->provider
     * @param string    $name          Initialization value for $this->name
     * @param string    $gender        Initialization value for $this->gender
     * @param string    $natIdNo       Initialization value for $this->natIdNo
     * @param string    $nationality   Initialization value for $this->nationality
     * @param string    $birthDate     Initialization value for $this->birthDate
     */
    public function __construct()
    {
        if (10 == func_num_args()) {
            $this->status        = func_get_arg(0);
            $this->deceasedDate  = func_get_arg(1);
            $this->emigratedDate = func_get_arg(2);
            $this->role          = func_get_arg(3);
            $this->provider      = func_get_arg(4);
            $this->name          = func_get_arg(5);
            $this->gender        = func_get_arg(6);
            $this->natIdNo       = func_get_arg(7);
            $this->nationality   = func_get_arg(8);
            $this->birthDate     = func_get_arg(9);
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
        $json['status']        = $this->status;
        $json['deceasedDate']  = isset($this->deceasedDate) ?
            DateTimeHelper::toRfc3339DateTime($this->deceasedDate) : null;
        $json['emigratedDate'] = isset($this->emigratedDate) ?
            DateTimeHelper::toRfc3339DateTime($this->emigratedDate) : null;
        $json['role']          = $this->role;
        $json['provider']      = $this->provider;
        $json['name']          = $this->name;
        $json['gender']        = $this->gender;
        $json['natIdNo']       = $this->natIdNo;
        $json['nationality']   = $this->nationality;
        $json['birthDate']     = $this->birthDate;

        return array_merge($json, $this->additionalProperties);
    }
}
