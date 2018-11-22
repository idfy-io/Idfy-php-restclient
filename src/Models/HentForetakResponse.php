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
class HentForetakResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Identifikasjon|null $identifikasjonField public property
     */
    public $identifikasjonField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\NavnAdresse|null $navnAdresseField public property
     */
    public $navnAdresseField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Rating|null $ratingField public property
     */
    public $ratingField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\HistoriskRating[]|null $histRatingField public property
     */
    public $histRatingField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Grunnfakta|null $grunnfaktaField public property
     */
    public $grunnfaktaField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Juridisk[]|null $juridiskField public property
     */
    public $juridiskField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Verv[]|null $vervField public property
     */
    public $vervField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Aksjonar[]|null $aksjonarField public property
     */
    public $aksjonarField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Datterselskap[]|null $datterselskapField public property
     */
    public $datterselskapField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\OkonomiEnk[]|null $okonomiEnkField public property
     */
    public $okonomiEnkField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\NokkeltallForetak[]|null $nokkeltallForetakField public property
     */
    public $nokkeltallForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\NokkeltallBransje[]|null $nokkeltallBransjeField public property
     */
    public $nokkeltallBransjeField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\NokkeltallKonsern[]|null $nokkeltallKonsernField public property
     */
    public $nokkeltallKonsernField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\BetaSammendrag|null $betaSammendragField public property
     */
    public $betaSammendragField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\BetaDetaljer[]|null $betaDetaljerField public property
     */
    public $betaDetaljerField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Losore[]|null $losoreField public property
     */
    public $losoreField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\EiendomNorge|null $eiendomNorgeField public property
     */
    public $eiendomNorgeField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\KonsernLink[]|null $konsernLinkField public property
     */
    public $konsernLinkField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Scoring|null $scoringField public property
     */
    public $scoringField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\OkonomiSammendragForetak[]|null $okonomiSammendragForetakField public property
     */
    public $okonomiSammendragForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\OkonomiSammendragKonsern[]|null $okonomiSammendragKonsernField public property
     */
    public $okonomiSammendragKonsernField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\OkonomiDetaljerForetak[]|null $okonomiDetaljerForetakField public property
     */
    public $okonomiDetaljerForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\OkonomiDetaljerKonsern[]|null $okonomiDetaljerKonsernField public property
     */
    public $okonomiDetaljerKonsernField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\EiendelerForetak[]|null $eiendelerForetakField public property
     */
    public $eiendelerForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\EiendelerKonsern[]|null $eiendelerKonsernField public property
     */
    public $eiendelerKonsernField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\GjeldEgenkapitalForetak[]|null $gjeldEgenkapitalForetakField public property
     */
    public $gjeldEgenkapitalForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\GjeldEgenkapitalKonsern[]|null $gjeldEgenkapitalKonsernField public property
     */
    public $gjeldEgenkapitalKonsernField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\AvdelingData|null $avdelingDataField public property
     */
    public $avdelingDataField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Rettighetshavere[]|null $rettighetshavereField public property
     */
    public $rettighetshavereField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\EiendomNorgeListe[]|null $eiendomNorgeListeField public property
     */
    public $eiendomNorgeListeField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\FullmaktForetak[]|null $fullmaktForetakField public property
     */
    public $fullmaktForetakField;

    /**
     * @todo Write general description for this property
     * @var \IdfyLib\Models\Meldinger[]|null $meldingerField public property
     */
    public $meldingerField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param Identifikasjon $identifikasjonField           Initialization value for $this->identifikasjonField
     * @param NavnAdresse    $navnAdresseField              Initialization value for $this->navnAdresseField
     * @param Rating         $ratingField                   Initialization value for $this->ratingField
     * @param array          $histRatingField               Initialization value for $this->histRatingField
     * @param Grunnfakta     $grunnfaktaField               Initialization value for $this->grunnfaktaField
     * @param array          $juridiskField                 Initialization value for $this->juridiskField
     * @param array          $vervField                     Initialization value for $this->vervField
     * @param array          $aksjonarField                 Initialization value for $this->aksjonarField
     * @param array          $datterselskapField            Initialization value for $this->datterselskapField
     * @param array          $okonomiEnkField               Initialization value for $this->okonomiEnkField
     * @param array          $nokkeltallForetakField        Initialization value for $this->nokkeltallForetakField
     * @param array          $nokkeltallBransjeField        Initialization value for $this->nokkeltallBransjeField
     * @param array          $nokkeltallKonsernField        Initialization value for $this->nokkeltallKonsernField
     * @param BetaSammendrag $betaSammendragField           Initialization value for $this->betaSammendragField
     * @param array          $betaDetaljerField             Initialization value for $this->betaDetaljerField
     * @param array          $losoreField                   Initialization value for $this->losoreField
     * @param EiendomNorge   $eiendomNorgeField             Initialization value for $this->eiendomNorgeField
     * @param array          $konsernLinkField              Initialization value for $this->konsernLinkField
     * @param Scoring        $scoringField                  Initialization value for $this->scoringField
     * @param array          $okonomiSammendragForetakField Initialization value for $this-
     *                                                        >okonomiSammendragForetakField
     * @param array          $okonomiSammendragKonsernField Initialization value for $this-
     *                                                        >okonomiSammendragKonsernField
     * @param array          $okonomiDetaljerForetakField   Initialization value for $this-
     *                                                        >okonomiDetaljerForetakField
     * @param array          $okonomiDetaljerKonsernField   Initialization value for $this-
     *                                                        >okonomiDetaljerKonsernField
     * @param array          $eiendelerForetakField         Initialization value for $this->eiendelerForetakField
     * @param array          $eiendelerKonsernField         Initialization value for $this->eiendelerKonsernField
     * @param array          $gjeldEgenkapitalForetakField  Initialization value for $this-
     *                                                        >gjeldEgenkapitalForetakField
     * @param array          $gjeldEgenkapitalKonsernField  Initialization value for $this-
     *                                                        >gjeldEgenkapitalKonsernField
     * @param AvdelingData   $avdelingDataField             Initialization value for $this->avdelingDataField
     * @param array          $rettighetshavereField         Initialization value for $this->rettighetshavereField
     * @param array          $eiendomNorgeListeField        Initialization value for $this->eiendomNorgeListeField
     * @param array          $fullmaktForetakField          Initialization value for $this->fullmaktForetakField
     * @param array          $meldingerField                Initialization value for $this->meldingerField
     */
    public function __construct()
    {
        if (32 == func_num_args()) {
            $this->identifikasjonField           = func_get_arg(0);
            $this->navnAdresseField              = func_get_arg(1);
            $this->ratingField                   = func_get_arg(2);
            $this->histRatingField               = func_get_arg(3);
            $this->grunnfaktaField               = func_get_arg(4);
            $this->juridiskField                 = func_get_arg(5);
            $this->vervField                     = func_get_arg(6);
            $this->aksjonarField                 = func_get_arg(7);
            $this->datterselskapField            = func_get_arg(8);
            $this->okonomiEnkField               = func_get_arg(9);
            $this->nokkeltallForetakField        = func_get_arg(10);
            $this->nokkeltallBransjeField        = func_get_arg(11);
            $this->nokkeltallKonsernField        = func_get_arg(12);
            $this->betaSammendragField           = func_get_arg(13);
            $this->betaDetaljerField             = func_get_arg(14);
            $this->losoreField                   = func_get_arg(15);
            $this->eiendomNorgeField             = func_get_arg(16);
            $this->konsernLinkField              = func_get_arg(17);
            $this->scoringField                  = func_get_arg(18);
            $this->okonomiSammendragForetakField = func_get_arg(19);
            $this->okonomiSammendragKonsernField = func_get_arg(20);
            $this->okonomiDetaljerForetakField   = func_get_arg(21);
            $this->okonomiDetaljerKonsernField   = func_get_arg(22);
            $this->eiendelerForetakField         = func_get_arg(23);
            $this->eiendelerKonsernField         = func_get_arg(24);
            $this->gjeldEgenkapitalForetakField  = func_get_arg(25);
            $this->gjeldEgenkapitalKonsernField  = func_get_arg(26);
            $this->avdelingDataField             = func_get_arg(27);
            $this->rettighetshavereField         = func_get_arg(28);
            $this->eiendomNorgeListeField        = func_get_arg(29);
            $this->fullmaktForetakField          = func_get_arg(30);
            $this->meldingerField                = func_get_arg(31);
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
        $json['identifikasjonField']           = $this->identifikasjonField;
        $json['navnAdresseField']              = $this->navnAdresseField;
        $json['ratingField']                   = $this->ratingField;
        $json['histRatingField']               = $this->histRatingField;
        $json['grunnfaktaField']               = $this->grunnfaktaField;
        $json['juridiskField']                 = $this->juridiskField;
        $json['vervField']                     = $this->vervField;
        $json['aksjonarField']                 = $this->aksjonarField;
        $json['datterselskapField']            = $this->datterselskapField;
        $json['okonomiEnkField']               = $this->okonomiEnkField;
        $json['nokkeltallForetakField']        = $this->nokkeltallForetakField;
        $json['nokkeltallBransjeField']        = $this->nokkeltallBransjeField;
        $json['nokkeltallKonsernField']        = $this->nokkeltallKonsernField;
        $json['betaSammendragField']           = $this->betaSammendragField;
        $json['betaDetaljerField']             = $this->betaDetaljerField;
        $json['losoreField']                   = $this->losoreField;
        $json['eiendomNorgeField']             = $this->eiendomNorgeField;
        $json['konsernLinkField']              = $this->konsernLinkField;
        $json['scoringField']                  = $this->scoringField;
        $json['okonomiSammendragForetakField'] = $this->okonomiSammendragForetakField;
        $json['okonomiSammendragKonsernField'] = $this->okonomiSammendragKonsernField;
        $json['okonomiDetaljerForetakField']   = $this->okonomiDetaljerForetakField;
        $json['okonomiDetaljerKonsernField']   = $this->okonomiDetaljerKonsernField;
        $json['eiendelerForetakField']         = $this->eiendelerForetakField;
        $json['eiendelerKonsernField']         = $this->eiendelerKonsernField;
        $json['gjeldEgenkapitalForetakField']  = $this->gjeldEgenkapitalForetakField;
        $json['gjeldEgenkapitalKonsernField']  = $this->gjeldEgenkapitalKonsernField;
        $json['avdelingDataField']             = $this->avdelingDataField;
        $json['rettighetshavereField']         = $this->rettighetshavereField;
        $json['eiendomNorgeListeField']        = $this->eiendomNorgeListeField;
        $json['fullmaktForetakField']          = $this->fullmaktForetakField;
        $json['meldingerField']                = $this->meldingerField;

        return array_merge($json, $this->additionalProperties);
    }
}
