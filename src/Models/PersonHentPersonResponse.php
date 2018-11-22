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
class PersonHentPersonResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonIdentifikasjon|null $identifikasjonField public property
     */
    public $identifikasjonField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonNavnAdresse|null $navnAdresseField public property
     */
    public $navnAdresseField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonScoring|null $scoringField public property
     */
    public $scoringField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonDelomrader[]|null $delomraderField public property
     */
    public $delomraderField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonBetaSammendrag|null $betaSammendragField public property
     */
    public $betaSammendragField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonBetaDetaljer[]|null $betaDetaljerField public property
     */
    public $betaDetaljerField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonLigning[]|null $ligningField public property
     */
    public $ligningField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonDisponibelInntekt[]|null $disponibelInntektField public property
     */
    public $disponibelInntektField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonNaringsInteresser[]|null $naringsInteresserField public property
     */
    public $naringsInteresserField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonEiendomNorge|null $eiendomNorgeField public property
     */
    public $eiendomNorgeField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonEiendomListe[]|null $eiendomListeField public property
     */
    public $eiendomListeField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonLosore[]|null $losoreField public property
     */
    public $losoreField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonTidligereNavnAdresse[]|null $tidligereNavnAdresseField public property
     */
    public $tidligereNavnAdresseField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonFullmaktForetak[]|null $fullmaktForetakField public property
     */
    public $fullmaktForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\PersonMeldinger[]|null $meldingerField public property
     */
    public $meldingerField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param PersonIdentifikasjon $identifikasjonField       Initialization value for $this->identifikasjonField
     * @param PersonNavnAdresse    $navnAdresseField          Initialization value for $this->navnAdresseField
     * @param PersonScoring        $scoringField              Initialization value for $this->scoringField
     * @param array                $delomraderField           Initialization value for $this->delomraderField
     * @param PersonBetaSammendrag $betaSammendragField       Initialization value for $this->betaSammendragField
     * @param array                $betaDetaljerField         Initialization value for $this->betaDetaljerField
     * @param array                $ligningField              Initialization value for $this->ligningField
     * @param array                $disponibelInntektField    Initialization value for $this->disponibelInntektField
     * @param array                $naringsInteresserField    Initialization value for $this->naringsInteresserField
     * @param PersonEiendomNorge   $eiendomNorgeField         Initialization value for $this->eiendomNorgeField
     * @param array                $eiendomListeField         Initialization value for $this->eiendomListeField
     * @param array                $losoreField               Initialization value for $this->losoreField
     * @param array                $tidligereNavnAdresseField Initialization value for $this-
     *                                                          >tidligereNavnAdresseField
     * @param array                $fullmaktForetakField      Initialization value for $this->fullmaktForetakField
     * @param array                $meldingerField            Initialization value for $this->meldingerField
     */
    public function __construct()
    {
        if (15 == func_num_args()) {
            $this->identifikasjonField       = func_get_arg(0);
            $this->navnAdresseField          = func_get_arg(1);
            $this->scoringField              = func_get_arg(2);
            $this->delomraderField           = func_get_arg(3);
            $this->betaSammendragField       = func_get_arg(4);
            $this->betaDetaljerField         = func_get_arg(5);
            $this->ligningField              = func_get_arg(6);
            $this->disponibelInntektField    = func_get_arg(7);
            $this->naringsInteresserField    = func_get_arg(8);
            $this->eiendomNorgeField         = func_get_arg(9);
            $this->eiendomListeField         = func_get_arg(10);
            $this->losoreField               = func_get_arg(11);
            $this->tidligereNavnAdresseField = func_get_arg(12);
            $this->fullmaktForetakField      = func_get_arg(13);
            $this->meldingerField            = func_get_arg(14);
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
        $json['identifikasjonField']       = $this->identifikasjonField;
        $json['navnAdresseField']          = $this->navnAdresseField;
        $json['scoringField']              = $this->scoringField;
        $json['delomraderField']           = $this->delomraderField;
        $json['betaSammendragField']       = $this->betaSammendragField;
        $json['betaDetaljerField']         = $this->betaDetaljerField;
        $json['ligningField']              = $this->ligningField;
        $json['disponibelInntektField']    = $this->disponibelInntektField;
        $json['naringsInteresserField']    = $this->naringsInteresserField;
        $json['eiendomNorgeField']         = $this->eiendomNorgeField;
        $json['eiendomListeField']         = $this->eiendomListeField;
        $json['losoreField']               = $this->losoreField;
        $json['tidligereNavnAdresseField'] = $this->tidligereNavnAdresseField;
        $json['fullmaktForetakField']      = $this->fullmaktForetakField;
        $json['meldingerField']            = $this->meldingerField;

        return array_merge($json, $this->additionalProperties);
    }
}
