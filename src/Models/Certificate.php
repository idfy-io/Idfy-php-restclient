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
class Certificate implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var string|null $issuerName public property
     */
    public $issuerName;

    /**
     * @todo Write general description for this property
     * @var string|null $subjectName public property
     */
    public $subjectName;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $validFromDate public property
     */
    public $validFromDate;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $validToDate public property
     */
    public $validToDate;

    /**
     * @todo Write general description for this property
     * @var string|null $versionNumber public property
     */
    public $versionNumber;

    /**
     * @todo Write general description for this property
     * @var string|null $serialNumber public property
     */
    public $serialNumber;

    /**
     * @todo Write general description for this property
     * @var string|null $keyAlgorithm public property
     */
    public $keyAlgorithm;

    /**
     * @todo Write general description for this property
     * @var string|null $keySize public property
     */
    public $keySize;

    /**
     * @todo Write general description for this property
     * @var string|null $uniqueId public property
     */
    public $uniqueId;

    /**
     * @todo Write general description for this property
     * @var string|null $originator public property
     */
    public $originator;

    /**
     * @todo Write general description for this property
     * @var string|null $bankName public property
     */
    public $bankName;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $dateOfBirth public property
     */
    public $dateOfBirth;

    /**
     * @todo Write general description for this property
     * @var string|null $policyOid public property
     */
    public $policyOid;

    /**
     * @todo Write general description for this property
     * @var string|null $commonName public property
     */
    public $commonName;

    /**
     * @todo Write general description for this property
     * @var string|null $signingCertficate public property
     */
    public $signingCertficate;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\X509Certificate|null $x509Certificate public property
     */
    public $x509Certificate;

    /**
     * @todo Write general description for this property
     * @var string|null $keyUsage public property
     */
    public $keyUsage;

    /**
     * @todo Write general description for this property
     * @var object|null $emailAddress public property
     */
    public $emailAddress;

    /**
     * @todo Write general description for this property
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $signingTime public property
     */
    public $signingTime;

    /**
     * @todo Write general description for this property
     * @var string|null $phoneNumber public property
     */
    public $phoneNumber;

    /**
     * @todo Write general description for this property
     * @var string|null $certificateType public property
     */
    public $certificateType;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string           $issuerName        Initialization value for $this->issuerName
     * @param string           $subjectName       Initialization value for $this->subjectName
     * @param \DateTime        $validFromDate     Initialization value for $this->validFromDate
     * @param \DateTime        $validToDate       Initialization value for $this->validToDate
     * @param string           $versionNumber     Initialization value for $this->versionNumber
     * @param string           $serialNumber      Initialization value for $this->serialNumber
     * @param string           $keyAlgorithm      Initialization value for $this->keyAlgorithm
     * @param string           $keySize           Initialization value for $this->keySize
     * @param string           $uniqueId          Initialization value for $this->uniqueId
     * @param string           $originator        Initialization value for $this->originator
     * @param string           $bankName          Initialization value for $this->bankName
     * @param \DateTime        $dateOfBirth       Initialization value for $this->dateOfBirth
     * @param string           $policyOid         Initialization value for $this->policyOid
     * @param string           $commonName        Initialization value for $this->commonName
     * @param string           $signingCertficate Initialization value for $this->signingCertficate
     * @param X509Certificate  $x509Certificate   Initialization value for $this->x509Certificate
     * @param string           $keyUsage          Initialization value for $this->keyUsage
     * @param object           $emailAddress      Initialization value for $this->emailAddress
     * @param \DateTime        $signingTime       Initialization value for $this->signingTime
     * @param string           $phoneNumber       Initialization value for $this->phoneNumber
     * @param string           $certificateType   Initialization value for $this->certificateType
     */
    public function __construct()
    {
        if (21 == func_num_args()) {
            $this->issuerName        = func_get_arg(0);
            $this->subjectName       = func_get_arg(1);
            $this->validFromDate     = func_get_arg(2);
            $this->validToDate       = func_get_arg(3);
            $this->versionNumber     = func_get_arg(4);
            $this->serialNumber      = func_get_arg(5);
            $this->keyAlgorithm      = func_get_arg(6);
            $this->keySize           = func_get_arg(7);
            $this->uniqueId          = func_get_arg(8);
            $this->originator        = func_get_arg(9);
            $this->bankName          = func_get_arg(10);
            $this->dateOfBirth       = func_get_arg(11);
            $this->policyOid         = func_get_arg(12);
            $this->commonName        = func_get_arg(13);
            $this->signingCertficate = func_get_arg(14);
            $this->x509Certificate   = func_get_arg(15);
            $this->keyUsage          = func_get_arg(16);
            $this->emailAddress      = func_get_arg(17);
            $this->signingTime       = func_get_arg(18);
            $this->phoneNumber       = func_get_arg(19);
            $this->certificateType   = func_get_arg(20);
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
        $json['issuerName']        = $this->issuerName;
        $json['subjectName']       = $this->subjectName;
        $json['validFromDate']     = isset($this->validFromDate) ?
            DateTimeHelper::toRfc3339DateTime($this->validFromDate) : null;
        $json['validToDate']       = isset($this->validToDate) ?
            DateTimeHelper::toRfc3339DateTime($this->validToDate) : null;
        $json['versionNumber']     = $this->versionNumber;
        $json['serialNumber']      = $this->serialNumber;
        $json['keyAlgorithm']      = $this->keyAlgorithm;
        $json['keySize']           = $this->keySize;
        $json['uniqueId']          = $this->uniqueId;
        $json['originator']        = $this->originator;
        $json['bankName']          = $this->bankName;
        $json['dateOfBirth']       = isset($this->dateOfBirth) ?
            DateTimeHelper::toRfc3339DateTime($this->dateOfBirth) : null;
        $json['policyOid']         = $this->policyOid;
        $json['commonName']        = $this->commonName;
        $json['signingCertficate'] = $this->signingCertficate;
        $json['x509Certificate']   = $this->x509Certificate;
        $json['keyUsage']          = $this->keyUsage;
        $json['emailAddress']      = $this->emailAddress;
        $json['signingTime']       = isset($this->signingTime) ?
            DateTimeHelper::toRfc3339DateTime($this->signingTime) : null;
        $json['phoneNumber']       = $this->phoneNumber;
        $json['certificateType']   = $this->certificateType;

        return array_merge($json, $this->additionalProperties);
    }
}
