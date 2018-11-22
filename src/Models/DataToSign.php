<?php
/*
 * Idfy
 *
 * This file was automatically generated for Idfy by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace IdfyLib\Models;

use JsonSerializable;

/**
 *Data that should be signed
 */
class DataToSign implements JsonSerializable
{
    /**
     * Base 64 encoded string of content, utf-8
     * @required
     * @var string $base64Content public property
     */
    public $base64Content;

    /**
     * The document FileName, has to include a valid extension (.pdf, .xml, .txt, .doc, .docx, .rtf, .ott,
     * odt)
     * @required
     * @var string $fileName public property
     */
    public $fileName;

    /**
     * Stylesheet to be included if you are uploading xml
     * @var string|null $base64ContentStyleSheet public property
     */
    public $base64ContentStyleSheet;

    /**
     * Convert a non PDF file to PDF, supported formats are word documents, rich texformat and open office
     * (.doc, docx, .rtf .odt and ott), Remark the document that is signed is not the original document.
     * @var bool|null $convertToPDF public property
     */
    public $convertToPDF;

    /**
     * Set how you want the signed file to be packaged
     * @var \IdfyLib\Models\Packaging|null $packaging public property
     */
    public $packaging;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string    $base64Content           Initialization value for $this->base64Content
     * @param string    $fileName                Initialization value for $this->fileName
     * @param string    $base64ContentStyleSheet Initialization value for $this->base64ContentStyleSheet
     * @param bool      $convertToPDF            Initialization value for $this->convertToPDF
     * @param Packaging $packaging               Initialization value for $this->packaging
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->base64Content           = func_get_arg(0);
            $this->fileName                = func_get_arg(1);
            $this->base64ContentStyleSheet = func_get_arg(2);
            $this->convertToPDF            = func_get_arg(3);
            $this->packaging               = func_get_arg(4);
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
        $json['base64Content']           = $this->base64Content;
        $json['fileName']                = $this->fileName;
        $json['base64ContentStyleSheet'] = $this->base64ContentStyleSheet;
        $json['convertToPDF']            = $this->convertToPDF;
        $json['packaging']               = $this->packaging;

        return array_merge($json, $this->additionalProperties);
    }
}
