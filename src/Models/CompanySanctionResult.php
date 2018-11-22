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
 *List of all Sanction items with match for the input request.
 */
class CompanySanctionResult implements JsonSerializable
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
     * Additional details about what the company does
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
     * Name aliases for the company. May be none, one or more.
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
     * Name of company
     * @var string|null $name public property
     */
    public $name;

    /**
     * Two-letter code as specified in the ISO 3166 standard
     * @var string|null $nationality public property
     */
    public $nationality;

    /**
     * Name of data provider
     * @var string|null $provider public property
     */
    public $provider;

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
     * @param string    $source         Initialization value for $this->source
     * @param string    $externalId     Initialization value for $this->externalId
     * @param \DateTime $lastUpdate     Initialization value for $this->lastUpdate
     * @param \DateTime $firstUpdate    Initialization value for $this->firstUpdate
     * @param string    $name           Initialization value for $this->name
     * @param string    $nationality    Initialization value for $this->nationality
     * @param string    $provider       Initialization value for $this->provider
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->matchIndicator = func_get_arg(0);
            $this->title          = func_get_arg(1);
            $this->mfunction      = func_get_arg(2);
            $this->comment        = func_get_arg(3);
            $this->aliasList      = func_get_arg(4);
            $this->addressList    = func_get_arg(5);
            $this->urlList        = func_get_arg(6);
            $this->source         = func_get_arg(7);
            $this->externalId     = func_get_arg(8);
            $this->lastUpdate     = func_get_arg(9);
            $this->firstUpdate    = func_get_arg(10);
            $this->name           = func_get_arg(11);
            $this->nationality    = func_get_arg(12);
            $this->provider       = func_get_arg(13);
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
        $json['source']         = $this->source;
        $json['externalId']     = $this->externalId;
        $json['lastUpdate']     = isset($this->lastUpdate) ?
            DateTimeHelper::toRfc3339DateTime($this->lastUpdate) : null;
        $json['firstUpdate']    = isset($this->firstUpdate) ?
            DateTimeHelper::toRfc3339DateTime($this->firstUpdate) : null;
        $json['name']           = $this->name;
        $json['nationality']    = $this->nationality;
        $json['provider']       = $this->provider;

        return array_merge($json, $this->additionalProperties);
    }
}
