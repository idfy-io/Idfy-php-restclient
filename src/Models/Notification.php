<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Setup your own notification texts, and specify specail settings. Info: you also has to setup
 * notifications on the signers you want to notify.
 */
class Notification implements JsonSerializable
{
    /**
     * Here you can setup email/sms notifications notifying the signer that they have a new document to
     * sign.
     * @var \IdfyLib\Models\SignRequest|null $signRequest public property
     */
    public $signRequest;

    /**
     * Here you can setup email/sms notifications reminding the signers that they have unsigned documents.
     * @var \IdfyLib\Models\Reminder69|null $reminder public property
     */
    public $reminder;

    /**
     * Here you can setup email/sms notifications as a receipt for a retrieved signature
     * @var \IdfyLib\Models\SignatureReceipt70|null $signatureReceipt public property
     */
    public $signatureReceipt;

    /**
     * Here you can setup email/sms notifications as a receipt for a signed document (when all the required
     * signatures is registered).
     * @var \IdfyLib\Models\FinalReceipt71|null $finalReceipt public property
     */
    public $finalReceipt;

    /**
     * Here you can setup email/sms notifications as a receipt when a document is canceled and can no
     * longer be signed.
     * @var \IdfyLib\Models\BaseNotification|null $canceledReceipt public property
     */
    public $canceledReceipt;

    /**
     * Here you can setup email/sms notifications as a receipt when a document is expired and can no longer
     * be signed.
     * @var \IdfyLib\Models\BaseNotification|null $expiredReceipt public property
     */
    public $expiredReceipt;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param SignRequest        $signRequest      Initialization value for $this->signRequest
     * @param Reminder69         $reminder         Initialization value for $this->reminder
     * @param SignatureReceipt70 $signatureReceipt Initialization value for $this->signatureReceipt
     * @param FinalReceipt71     $finalReceipt     Initialization value for $this->finalReceipt
     * @param BaseNotification   $canceledReceipt  Initialization value for $this->canceledReceipt
     * @param BaseNotification   $expiredReceipt   Initialization value for $this->expiredReceipt
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->signRequest      = func_get_arg(0);
            $this->reminder         = func_get_arg(1);
            $this->signatureReceipt = func_get_arg(2);
            $this->finalReceipt     = func_get_arg(3);
            $this->canceledReceipt  = func_get_arg(4);
            $this->expiredReceipt   = func_get_arg(5);
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
        $json['signRequest']      = $this->signRequest;
        $json['reminder']         = $this->reminder;
        $json['signatureReceipt'] = $this->signatureReceipt;
        $json['finalReceipt']     = $this->finalReceipt;
        $json['canceledReceipt']  = $this->canceledReceipt;
        $json['expiredReceipt']   = $this->expiredReceipt;

        return array_merge($json, $this->additionalProperties);
    }
}
