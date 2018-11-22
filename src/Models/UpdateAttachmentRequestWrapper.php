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
class UpdateAttachmentRequestWrapper implements JsonSerializable
{
    /**
     * Choose between the following:
     *
     * * <b>show_accept:</b> The signer will see the attachment before signing the main document (is
     * default now)
     *
     * * <b>read_accept:</b> The signer have to see the entire document before they can continue,
     *
     * * <b>sign:</b> The signer has to sign the attachment (extra cost per signature)
     * @var string|null $type public property
     */
    public $type;

    /**
     * Filename with file extension. <span style="color:red;">We only support PDF for attachments, set
     * convert to pdf to true if you have a convertable filetype</span>
     * @var string|null $fileName public property
     */
    public $fileName;

    /**
     * Give the attachment a title that will be presented to the user
     * @var string|null $title public property
     */
    public $title;

    /**
     * base 64 encoded attachment (utf-8)
     * @var string|null $data public property
     */
    public $data;

    /**
     * Convert Attachment to pdf, see our documentation for supported types
     * @var bool|null $convertToPdf public property
     */
    public $convertToPdf;

    /**
     * Optional: Specify which signers that should be able to see / sign this attachment
     * @var array|null $signers public property
     */
    public $signers;

    /**
     * Optional: An optional description of the document
     * @var string|null $description public property
     */
    public $description;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string $type         Initialization value for $this->type
     * @param string $fileName     Initialization value for $this->fileName
     * @param string $title        Initialization value for $this->title
     * @param string $data         Initialization value for $this->data
     * @param bool   $convertToPdf Initialization value for $this->convertToPdf
     * @param array  $signers      Initialization value for $this->signers
     * @param string $description  Initialization value for $this->description
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->type         = func_get_arg(0);
            $this->fileName     = func_get_arg(1);
            $this->title        = func_get_arg(2);
            $this->data         = func_get_arg(3);
            $this->convertToPdf = func_get_arg(4);
            $this->signers      = func_get_arg(5);
            $this->description  = func_get_arg(6);
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
        $json['type']         = $this->type;
        $json['fileName']     = $this->fileName;
        $json['title']        = $this->title;
        $json['data']         = $this->data;
        $json['convertToPdf'] = $this->convertToPdf;
        $json['signers']      = $this->signers;
        $json['description']  = $this->description;

        return array_merge($json, $this->additionalProperties);
    }
}
