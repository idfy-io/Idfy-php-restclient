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
 *A summary containing core information about a document
 */
class DocumentSummary implements JsonSerializable
{
    /**
     * Document id
     * @var string|null $documentId public property
     */
    public $documentId;

    /**
     * Account id
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * Document title
     * @var string|null $title public property
     */
    public $title;

    /**
     * Document description
     * @var string|null $description public property
     */
    public $description;

    /**
     * When was the document last updated (ISO8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $lastUpdated public property
     */
    public $lastUpdated;

    /**
     * The sign deadline for the document (ISO8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $deadline public property
     */
    public $deadline;

    /**
     * When was all the signatures processed (ISO8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $signedDate public property
     */
    public $signedDate;

    /**
     * Document status
     * @var \IdfyLib\Models\Status85|null $status public property
     */
    public $status;

    /**
     * External document Id (your Id)
     * @var string|null $externalId public property
     */
    public $externalId;

    /**
     * All the signatures received on this document
     * @var \IdfyLib\Models\ExtendedDocumentSignature[]|null $documentSignatures public property
     */
    public $documentSignatures;

    /**
     * The number of required signatures on the document
     * @var integer|null $requiredSignatures public property
     */
    public $requiredSignatures;

    /**
     * How many signatures is completed right now
     * @var integer|null $currentSignatures public property
     */
    public $currentSignatures;

    /**
     * Document tags
     * @var array|null $tags public property
     */
    public $tags;

    /**
     * A list of attachment Id's
     * @var array|null $attachments public property
     */
    public $attachments;

    /**
     * A list of all the signers on the document
     * @var array|null $signers public property
     */
    public $signers;

    /**
     * When the document was created (ISO 8601)
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $created public property
     */
    public $created;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $documentId         Initialization value for $this->documentId
     * @param string    $accountId          Initialization value for $this->accountId
     * @param string    $title              Initialization value for $this->title
     * @param string    $description        Initialization value for $this->description
     * @param \DateTime $lastUpdated        Initialization value for $this->lastUpdated
     * @param \DateTime $deadline           Initialization value for $this->deadline
     * @param \DateTime $signedDate         Initialization value for $this->signedDate
     * @param Status85  $status             Initialization value for $this->status
     * @param string    $externalId         Initialization value for $this->externalId
     * @param array     $documentSignatures Initialization value for $this->documentSignatures
     * @param integer   $requiredSignatures Initialization value for $this->requiredSignatures
     * @param integer   $currentSignatures  Initialization value for $this->currentSignatures
     * @param array     $tags               Initialization value for $this->tags
     * @param array     $attachments        Initialization value for $this->attachments
     * @param array     $signers            Initialization value for $this->signers
     * @param \DateTime $created            Initialization value for $this->created
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->documentId         = func_get_arg(0);
            $this->accountId          = func_get_arg(1);
            $this->title              = func_get_arg(2);
            $this->description        = func_get_arg(3);
            $this->lastUpdated        = func_get_arg(4);
            $this->deadline           = func_get_arg(5);
            $this->signedDate         = func_get_arg(6);
            $this->status             = func_get_arg(7);
            $this->externalId         = func_get_arg(8);
            $this->documentSignatures = func_get_arg(9);
            $this->requiredSignatures = func_get_arg(10);
            $this->currentSignatures  = func_get_arg(11);
            $this->tags               = func_get_arg(12);
            $this->attachments        = func_get_arg(13);
            $this->signers            = func_get_arg(14);
            $this->created            = func_get_arg(15);
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
        $json['documentId']         = $this->documentId;
        $json['accountId']          = $this->accountId;
        $json['title']              = $this->title;
        $json['description']        = $this->description;
        $json['lastUpdated']        = isset($this->lastUpdated) ?
            DateTimeHelper::toRfc3339DateTime($this->lastUpdated) : null;
        $json['deadline']           = isset($this->deadline) ?
            DateTimeHelper::toRfc3339DateTime($this->deadline) : null;
        $json['signedDate']         = isset($this->signedDate) ?
            DateTimeHelper::toRfc3339DateTime($this->signedDate) : null;
        $json['status']             = $this->status;
        $json['externalId']         = $this->externalId;
        $json['documentSignatures'] = $this->documentSignatures;
        $json['requiredSignatures'] = $this->requiredSignatures;
        $json['currentSignatures']  = $this->currentSignatures;
        $json['tags']               = $this->tags;
        $json['attachments']        = $this->attachments;
        $json['signers']            = $this->signers;
        $json['created']            = isset($this->created) ?
            DateTimeHelper::toRfc3339DateTime($this->created) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
