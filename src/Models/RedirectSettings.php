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
class RedirectSettings implements JsonSerializable
{
    /**
     * Define if you want redirect or webmessaging or both
     * @required
     * @var string $redirectMode public property
     */
    public $redirectMode;

    /**
     * The domain your website is hosted on  <span style="color: red;">Required if you specify iframe on
     * any of the signers</span>)
     * @var string|null $domain public property
     */
    public $domain;

    /**
     * The signer is returned to this url if something goes wrong. <span style="color: red;">Required if
     * you specify redirect on any of the signers </span>
     * @var string|null $error public property
     */
    public $error;

    /**
     * The signer is returned to this url if the signing has been canceled  <span style="color: red;
     * ">Required if you specify redirect on any of the signers </span>
     * @var string|null $cancel public property
     */
    public $cancel;

    /**
     * The signer is returned to this url after a successfull signing  <span style="color: red;">Required
     * if you specify redirect on any of the signers </span>
     * @var string|null $success public property
     */
    public $success;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $redirectMode Initialization value for $this->redirectMode
     * @param string $domain       Initialization value for $this->domain
     * @param string $error        Initialization value for $this->error
     * @param string $cancel       Initialization value for $this->cancel
     * @param string $success      Initialization value for $this->success
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->redirectMode = func_get_arg(0);
            $this->domain       = func_get_arg(1);
            $this->error        = func_get_arg(2);
            $this->cancel       = func_get_arg(3);
            $this->success      = func_get_arg(4);
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
        $json['redirectMode'] = $this->redirectMode;
        $json['domain']       = $this->domain;
        $json['error']        = $this->error;
        $json['cancel']       = $this->cancel;
        $json['success']      = $this->success;

        return array_merge($json, $this->additionalProperties);
    }
}
