<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *iFrame settings
 *
 * REMARK! If using iframe the parent site have to be on https
 */
class IFrameSettings implements JsonSerializable
{
    /**
     * The domain of the site hosting the iFrame, this is used for the CSP policy and must be correct.
     * @required
     * @maps Domain
     * @var string $domain public property
     */
    public $domain;

    /**
     * Should WebMessaging be used for redirect of the iFrame parent, modern browsers have some issues with
     * childs redirecting parents without the same origin. To use this include this script: https:
     * //signerecommon.blob.core.windows.net/files/signereid_webmessaging.js
     * @maps WebMessaging
     * @var bool|null $webMessaging public property
     */
    public $webMessaging;

    /**
     * Height of the frame when used in iFrame.
     * @maps Height
     * @var integer|null $height public property
     */
    public $height;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string  $domain       Initialization value for $this->domain
     * @param bool    $webMessaging Initialization value for $this->webMessaging
     * @param integer $height       Initialization value for $this->height
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->domain       = func_get_arg(0);
            $this->webMessaging = func_get_arg(1);
            $this->height       = func_get_arg(2);
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
        $json['Domain']       = $this->domain;
        $json['WebMessaging'] = $this->webMessaging;
        $json['Height']       = $this->height;

        return array_merge($json, $this->additionalProperties);
    }
}
