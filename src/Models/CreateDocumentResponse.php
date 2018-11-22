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
class CreateDocumentResponse implements JsonSerializable
{
    /**
     * Signjob title
     * @required
     * @var string $title public property
     */
    public $title;

    /**
     * Signjob description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Your reference to this signjob
     * @required
     * @var string $externalId public property
     */
    public $externalId;

    /**
     * Data that should be signed
     * @required
     * @var \IdfyLib\Models\DataToSign $dataToSign public property
     */
    public $dataToSign;

    /**
     * The companys contact information
     * @required
     * @var \IdfyLib\Models\ContactDetails $contactDetails public property
     */
    public $contactDetails;

    /**
     * A unique document Id
     * @var string|null $documentId public property
     */
    public $documentId;

    /**
     * List of all the signers
     * @var \IdfyLib\Models\SignerResponse[]|null $signers public property
     */
    public $signers;

    /**
     * A dicitonary with extra information from additional services. See developer documentation for more
     * information
     * @var array|null $metaData public property
     */
    public $metaData;

    /**
     * Overall document status
     * @var \IdfyLib\Models\Status85|null $status public property
     */
    public $status;

    /**
     * HATEOAS extrainfo links retrieved for document.
     * @var \IdfyLib\Models\Link[]|null $links public property
     */
    public $links;

    /**
     * Manage notifications
     * @var \IdfyLib\Models\Notification|null $notification public property
     */
    public $notification;

    /**
     * For advanced users
     * @var \IdfyLib\Models\Advanced|null $advanced public property
     */
    public $advanced;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string         $title          Initialization value for $this->title
     * @param string         $description    Initialization value for $this->description
     * @param string         $externalId     Initialization value for $this->externalId
     * @param DataToSign     $dataToSign     Initialization value for $this->dataToSign
     * @param ContactDetails $contactDetails Initialization value for $this->contactDetails
     * @param string         $documentId     Initialization value for $this->documentId
     * @param array          $signers        Initialization value for $this->signers
     * @param array          $metaData       Initialization value for $this->metaData
     * @param Status85       $status         Initialization value for $this->status
     * @param array          $links          Initialization value for $this->links
     * @param Notification   $notification   Initialization value for $this->notification
     * @param Advanced       $advanced       Initialization value for $this->advanced
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->title          = func_get_arg(0);
            $this->description    = func_get_arg(1);
            $this->externalId     = func_get_arg(2);
            $this->dataToSign     = func_get_arg(3);
            $this->contactDetails = func_get_arg(4);
            $this->documentId     = func_get_arg(5);
            $this->signers        = func_get_arg(6);
            $this->metaData       = func_get_arg(7);
            $this->status         = func_get_arg(8);
            $this->links          = func_get_arg(9);
            $this->notification   = func_get_arg(10);
            $this->advanced       = func_get_arg(11);
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
        $json['title']          = $this->title;
        $json['description']    = $this->description;
        $json['externalId']     = $this->externalId;
        $json['dataToSign']     = $this->dataToSign;
        $json['contactDetails'] = $this->contactDetails;
        $json['documentId']     = $this->documentId;
        $json['signers']        = $this->signers;
        $json['metaData']       = $this->metaData;
        $json['status']         = $this->status;
        $json['links']          = $this->links;
        $json['notification']   = $this->notification;
        $json['advanced']       = $this->advanced;

        return array_merge($json, $this->additionalProperties);
    }
}
