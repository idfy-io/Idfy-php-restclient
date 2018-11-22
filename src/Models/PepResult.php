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
 *List of all PEP items with match for the input request.
 */
class PepResult implements JsonSerializable
{
    /**
     * Quality indicator of match. Higher number means better match.
     * @var integer|null $matchIndicator public property
     */
    public $matchIndicator;

    /**
     * May be a text string denoting title of position, job title, etc
     * @var string|null $title public property
     */
    public $title;

    /**
     * Additional details about what the person does
     * @maps function
     * @var string|null $mfunction public property
     */
    public $mfunction;

    /**
     * A comment of some kind may be present in some lists
     * @var string|null $comment public property
     */
    public $comment;

    /**
     * Name aliases for the person. May be none, one or more.
     * @var array|null $aliasList public property
     */
    public $aliasList;

    /**
     * List of addresses found in the lists
     * @var \IdfyLib\Models\AddressList[]|null $addressList public property
     */
    public $addressList;

    /**
     * URLs to source documents (May be used for further investigations)
     * @var array|null $urlList public property
     */
    public $urlList;

    /**
     * Name of data provider
     * @var string|null $provider public property
     */
    public $provider;

    /**
     * The name of the source list, e.g. 'EU_GLOBAL', 'PEP_Edge', 'UN_CONSOLIDATED'
     * @var string|null $source public property
     */
    public $source;

    /**
     * External identification
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * Date of last update
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastUpdate public property
     */
    public $lastUpdate;

    /**
     * Date of first update
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $firstUpdate public property
     */
    public $firstUpdate;

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
     * @param integer   $matchIndicator Initialization value for $this->matchIndicator
     * @param string    $title          Initialization value for $this->title
     * @param string    $mfunction      Initialization value for $this->mfunction
     * @param string    $comment        Initialization value for $this->comment
     * @param array     $aliasList      Initialization value for $this->aliasList
     * @param array     $addressList    Initialization value for $this->addressList
     * @param array     $urlList        Initialization value for $this->urlList
     * @param string    $provider       Initialization value for $this->provider
     * @param string    $source         Initialization value for $this->source
     * @param string    $externalId     Initialization value for $this->externalId
     * @param \DateTime $lastUpdate     Initialization value for $this->lastUpdate
     * @param \DateTime $firstUpdate    Initialization value for $this->firstUpdate
     * @param string    $name           Initialization value for $this->name
     * @param string    $gender         Initialization value for $this->gender
     * @param string    $natIdNo        Initialization value for $this->natIdNo
     * @param string    $nationality    Initialization value for $this->nationality
     * @param string    $birthDate      Initialization value for $this->birthDate
     */
    public function __construct()
    {
        if (17 == func_num_args()) {
            $this->matchIndicator = func_get_arg(0);
            $this->title          = func_get_arg(1);
            $this->mfunction      = func_get_arg(2);
            $this->comment        = func_get_arg(3);
            $this->aliasList      = func_get_arg(4);
            $this->addressList    = func_get_arg(5);
            $this->urlList        = func_get_arg(6);
            $this->provider       = func_get_arg(7);
            $this->source         = func_get_arg(8);
            $this->externalId     = func_get_arg(9);
            $this->lastUpdate     = func_get_arg(10);
            $this->firstUpdate    = func_get_arg(11);
            $this->name           = func_get_arg(12);
            $this->gender         = func_get_arg(13);
            $this->natIdNo        = func_get_arg(14);
            $this->nationality    = func_get_arg(15);
            $this->birthDate      = func_get_arg(16);
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
        $json['matchIndicator'] = $this->matchIndicator;
        $json['title']          = $this->title;
        $json['function']       = $this->mfunction;
        $json['comment']        = $this->comment;
        $json['aliasList']      = $this->aliasList;
        $json['addressList']    = $this->addressList;
        $json['urlList']        = $this->urlList;
        $json['provider']       = $this->provider;
        $json['source']         = $this->source;
        $json['externalId']     = $this->externalId;
        $json['lastUpdate']     = isset($this->lastUpdate) ?
            DateTimeHelper::toRfc3339DateTime($this->lastUpdate) : null;
        $json['firstUpdate']    = isset($this->firstUpdate) ?
            DateTimeHelper::toRfc3339DateTime($this->firstUpdate) : null;
        $json['name']           = $this->name;
        $json['gender']         = $this->gender;
        $json['natIdNo']        = $this->natIdNo;
        $json['nationality']    = $this->nationality;
        $json['birthDate']      = $this->birthDate;

        return array_merge($json, $this->additionalProperties);
    }
}
