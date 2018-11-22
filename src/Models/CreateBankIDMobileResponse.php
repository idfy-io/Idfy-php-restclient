<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *The reponse of the create BankID mobile request
 */
class CreateBankIDMobileResponse implements JsonSerializable
{
    /**
     * Signere requestid used to get the reponse form server afterwards
     * @maps RequestId
     * @var string|null $requestId public property
     */
    public $requestId;

    /**
     * The merchant ref to show to the end user (SNILL BANK)
     * @maps MerchantRef
     * @var string|null $merchantRef public property
     */
    public $merchantRef;

    /**
     * Information about error if the identification process failed. (Only set if an error occured, if not
     * is null)
     * @maps Error
     * @var \IdfyLib\Models\Error|null $error public property
     */
    public $error;

    /**
     * Status if the request started without errors
     * @maps OK
     * @var bool|null $oK public property
     */
    public $oK;

    /**
     * Indicates if the Mobile number of the date of birth was invalid. These could be 2 things:
     *
     * 1 the user does not have BankID mobile,
     *
     * 2. Wrong input data (the combination of mobile and date of birth does not match
     * @maps InvalidMobileNumberOrDateOfBirth
     * @var bool|null $invalidMobileNumberOrDateOfBirth public property
     */
    public $invalidMobileNumberOrDateOfBirth;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $requestId                        Initialization value for $this->requestId
     * @param string $merchantRef                      Initialization value for $this->merchantRef
     * @param Error  $error                            Initialization value for $this->error
     * @param bool   $oK                               Initialization value for $this->oK
     * @param bool   $invalidMobileNumberOrDateOfBirth Initialization value for $this-
     *                                                   >invalidMobileNumberOrDateOfBirth
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->requestId                        = func_get_arg(0);
            $this->merchantRef                      = func_get_arg(1);
            $this->error                            = func_get_arg(2);
            $this->oK                               = func_get_arg(3);
            $this->invalidMobileNumberOrDateOfBirth = func_get_arg(4);
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
        $json['RequestId']                        = $this->requestId;
        $json['MerchantRef']                      = $this->merchantRef;
        $json['Error']                            = $this->error;
        $json['OK']                               = $this->oK;
        $json['InvalidMobileNumberOrDateOfBirth'] = $this->invalidMobileNumberOrDateOfBirth;

        return array_merge($json, $this->additionalProperties);
    }
}
