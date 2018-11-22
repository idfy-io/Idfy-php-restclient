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
class SignerWrapper implements JsonSerializable
{
    /**
     * Your reference for the signer
     * @required
     * @var string $externalSignerId public property
     */
    public $externalSignerId;

    /**
     * Return urls and domain settings
     * @required
     * @var \IdfyLib\Models\RedirectSettings $redirectSettings public property
     */
    public $redirectSettings;

    /**
     * @todo Write general description for this property
     * @required
     * @var \IdfyLib\Models\SignatureType $signatureType public property
     */
    public $signatureType;

    /**
     * Define the signers name, mobile and email if you are using notifications
     * @var \IdfyLib\Models\SignerInfo|null $signerInfo public property
     */
    public $signerInfo;

    /**
     * Do you want the signer to authenticate before they can see the document?
     * @var \IdfyLib\Models\Authentication|null $authentication public property
     */
    public $authentication;

    /**
     * Coming soon: Do you want to collect extra info about this specific signer? (for example personal
     * information)
     * @var \IdfyLib\Models\ExtraInfoSignerRequest|null $extraInfo public property
     */
    public $extraInfo;

    /**
     * Here you can set language, styling and create dialogs the signer have to read before/after the
     * signing
     * @var \IdfyLib\Models\UI|null $ui public property
     */
    public $ui;

    /**
     * Enable and setup email/sms notifications for this specific signer
     * @var \IdfyLib\Models\Notifications|null $notifications public property
     */
    public $notifications;

    /**
     * Coming soon
     * @var array|null $tags public property
     */
    public $tags;

    /**
     * You can define a specific sign order /queue for the signers if you want to.
     * @var integer|null $order public property
     */
    public $order;

    /**
     * If some of the signers are marked as required, the other signers are not allowed to sign before the
     * required ones have signed the document
     * @var bool|null $required public property
     */
    public $required;

    /**
     * How long before the signers url should expire? (ISO 8601). This can be set if you only want a
     * limited time to live for each sign url (If you generate a new url at a later time this will also
     * have this limited lifetime). Defaults to the document lifetime.
     * @factory \IdfyLib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $signUrlExpires public property
     */
    public $signUrlExpires;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string                  $externalSignerId Initialization value for $this->externalSignerId
     * @param RedirectSettings        $redirectSettings Initialization value for $this->redirectSettings
     * @param SignatureType           $signatureType    Initialization value for $this->signatureType
     * @param SignerInfo              $signerInfo       Initialization value for $this->signerInfo
     * @param Authentication          $authentication   Initialization value for $this->authentication
     * @param ExtraInfoSignerRequest  $extraInfo        Initialization value for $this->extraInfo
     * @param UI                      $ui               Initialization value for $this->ui
     * @param Notifications           $notifications    Initialization value for $this->notifications
     * @param array                   $tags             Initialization value for $this->tags
     * @param integer                 $order            Initialization value for $this->order
     * @param bool                    $required         Initialization value for $this->required
     * @param \DateTime               $signUrlExpires   Initialization value for $this->signUrlExpires
     */
    public function __construct()
    {
        if (12 == func_num_args()) {
            $this->externalSignerId = func_get_arg(0);
            $this->redirectSettings = func_get_arg(1);
            $this->signatureType    = func_get_arg(2);
            $this->signerInfo       = func_get_arg(3);
            $this->authentication   = func_get_arg(4);
            $this->extraInfo        = func_get_arg(5);
            $this->ui               = func_get_arg(6);
            $this->notifications    = func_get_arg(7);
            $this->tags             = func_get_arg(8);
            $this->order            = func_get_arg(9);
            $this->required         = func_get_arg(10);
            $this->signUrlExpires   = func_get_arg(11);
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
        $json['externalSignerId'] = $this->externalSignerId;
        $json['redirectSettings'] = $this->redirectSettings;
        $json['signatureType']    = $this->signatureType;
        $json['signerInfo']       = $this->signerInfo;
        $json['authentication']   = $this->authentication;
        $json['extraInfo']        = $this->extraInfo;
        $json['ui']               = $this->ui;
        $json['notifications']    = $this->notifications;
        $json['tags']             = $this->tags;
        $json['order']            = $this->order;
        $json['required']         = $this->required;
        $json['signUrlExpires']   = isset($this->signUrlExpires) ?
            DateTimeHelper::toRfc3339DateTime($this->signUrlExpires) : null;

        return array_merge($json, $this->additionalProperties);
    }
}
