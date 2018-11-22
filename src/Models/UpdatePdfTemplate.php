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
class UpdatePdfTemplate implements JsonSerializable
{
    /**
     * The name of the Pdf template
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * Coverpage is the page added to the document at the beginning or end that show a list of the signers.
     * This settings hides that page or put it first or last. Default firstpage
     * @maps CoverPageSetting
     * @var string|null $coverPageSetting public property
     */
    public $coverPageSetting;

    /**
     * Adds a list of signer names on the last page of the PDF, only use this if you are sure that you have
     * room for the signatures. Contact support for more information.
     * @maps AddListOfSignaturesOnLastPageOfExistingPDF
     * @var bool|null $addListOfSignaturesOnLastPageOfExistingPDF public property
     */
    public $addListOfSignaturesOnLastPageOfExistingPDF;

    /**
     * The html template for the coverpage, if this is set it will override the default template. See our
     * documentation on more info on how to make your own custom template.
     * @maps CoverPageHtml
     * @var string|null $coverPageHtml public property
     */
    public $coverPageHtml;

    /**
     * List of html templates for the details attatchments. If this is set for one or more language, it
     * will override the default template. See our documentation on more info on how to make your own
     * custom template.
     * @maps DetailsPageHtml
     * @var \IdfyLib\Models\DetailsPageHtml|null $detailsPageHtml public property
     */
    public $detailsPageHtml;

    /**
     * List of labels for the verified label on the footer on each page. If this is set it will override
     * the default text. See our documentation on more info on how to customize.
     * @maps VerifiedTemplate
     * @var \IdfyLib\Models\VerifiedTemplate|null $verifiedTemplate public property
     */
    public $verifiedTemplate;

    /**
     * List of labels for the templates, this are used in the html templates. If this is set it will
     * override the default labels. See our documentation on more info on how to customize.
     * @maps Labels
     * @var \IdfyLib\Models\Labels|null $labels public property
     */
    public $labels;

    /**
     * Include your logo in the Pdf template
     * @maps IncludeLogo
     * @var bool|null $includeLogo public property
     */
    public $includeLogo;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param string           $name                                       Initialization value for $this->name
     * @param string           $coverPageSetting                           Initialization value for $this-
     *                                                                       >coverPageSetting
     * @param bool             $addListOfSignaturesOnLastPageOfExistingPDF Initialization value for $this-
     *                                                                       >addListOfSignaturesOnLastPageOfExistingPDF
     * @param string           $coverPageHtml                              Initialization value for $this-
     *                                                                       >coverPageHtml
     * @param DetailsPageHtml  $detailsPageHtml                            Initialization value for $this-
     *                                                                       >detailsPageHtml
     * @param VerifiedTemplate $verifiedTemplate                           Initialization value for $this-
     *                                                                       >verifiedTemplate
     * @param Labels           $labels                                     Initialization value for $this->labels
     * @param bool             $includeLogo                                Initialization value for $this-
     *                                                                       >includeLogo
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->name                                       = func_get_arg(0);
            $this->coverPageSetting                           = func_get_arg(1);
            $this->addListOfSignaturesOnLastPageOfExistingPDF = func_get_arg(2);
            $this->coverPageHtml                              = func_get_arg(3);
            $this->detailsPageHtml                            = func_get_arg(4);
            $this->verifiedTemplate                           = func_get_arg(5);
            $this->labels                                     = func_get_arg(6);
            $this->includeLogo                                = func_get_arg(7);
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
        $json['Name']                                       = $this->name;
        $json['CoverPageSetting']                           = $this->coverPageSetting;
        $json['AddListOfSignaturesOnLastPageOfExistingPDF'] = $this->addListOfSignaturesOnLastPageOfExistingPDF;
        $json['CoverPageHtml']                              = $this->coverPageHtml;
        $json['DetailsPageHtml']                            = $this->detailsPageHtml;
        $json['VerifiedTemplate']                           = $this->verifiedTemplate;
        $json['Labels']                                     = $this->labels;
        $json['IncludeLogo']                                = $this->includeLogo;

        return array_merge($json, $this->additionalProperties);
    }
}
