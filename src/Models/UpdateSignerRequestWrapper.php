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
class UpdateSignerRequestWrapper implements JsonSerializable
{
    /**
     * Return urls and domain settings
     * @var \IdfyLib\Models\RedirectSettings|null $redirectSettings public property
     */
    public $redirectSettings;

    /**
     * Define the signers name, mobile and email if you are using notifications
     * @var \IdfyLib\Models\SignerInfo|null $signerInfo public property
     */
    public $signerInfo;

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
     * Enable / setup email/sms notifications for this specific signer
     * @var \IdfyLib\Models\Notifications|null $notifications public property
     */
    public $notifications;

    /**
     * Signer tags
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
     * @param RedirectSettings        $redirectSettings Initialization value for $this->redirectSettings
     * @param SignerInfo              $signerInfo       Initialization value for $this->signerInfo
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
        if (9 == func_num_args()) {
            $this->redirectSettings = func_get_arg(0);
            $this->signerInfo       = func_get_arg(1);
            $this->extraInfo        = func_get_arg(2);
            $this->ui               = func_get_arg(3);
            $this->notifications    = func_get_arg(4);
            $this->tags             = func_get_arg(5);
            $this->order            = func_get_arg(6);
            $this->required         = func_get_arg(7);
            $this->signUrlExpires   = func_get_arg(8);
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
        $json['redirectSettings'] = $this->redirectSettings;
        $json['signerInfo']       = $this->signerInfo;
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
