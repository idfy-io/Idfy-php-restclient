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
class OkonomiDetaljerKonsern implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @var integer|null $regnskapsAvArField public property
     */
    public $regnskapsAvArField;

    /**
     * @todo Write general description for this property
     * @var integer|null $regnskapsAvMndField public property
     */
    public $regnskapsAvMndField;

    /**
     * @todo Write general description for this property
     * @var integer|null $totalinntektField public property
     */
    public $totalinntektField;

    /**
     * @todo Write general description for this property
     * @var integer|null $salgsinntekterField public property
     */
    public $salgsinntekterField;

    /**
     * @todo Write general description for this property
     * @var integer|null $annenDriftsinntektField public property
     */
    public $annenDriftsinntektField;

    /**
     * @todo Write general description for this property
     * @var integer|null $varekostnadField public property
     */
    public $varekostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $beholdningsendringField public property
     */
    public $beholdningsendringField;

    /**
     * @todo Write general description for this property
     * @var integer|null $lonnskostnadField public property
     */
    public $lonnskostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $avskrivningerField public property
     */
    public $avskrivningerField;

    /**
     * @todo Write general description for this property
     * @var integer|null $nedskrivningerField public property
     */
    public $nedskrivningerField;

    /**
     * @todo Write general description for this property
     * @var integer|null $annenDriftskostnadField public property
     */
    public $annenDriftskostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $driftsResultatField public property
     */
    public $driftsResultatField;

    /**
     * @todo Write general description for this property
     * @var integer|null $inntektInvDatterField public property
     */
    public $inntektInvDatterField;

    /**
     * @todo Write general description for this property
     * @var integer|null $inntektInvKonsernField public property
     */
    public $inntektInvKonsernField;

    /**
     * @todo Write general description for this property
     * @var integer|null $inntektInvAnnenField public property
     */
    public $inntektInvAnnenField;

    /**
     * @todo Write general description for this property
     * @var integer|null $renteinntektKonsernField public property
     */
    public $renteinntektKonsernField;

    /**
     * @todo Write general description for this property
     * @var integer|null $renteinntektAnnenField public property
     */
    public $renteinntektAnnenField;

    /**
     * @todo Write general description for this property
     * @var integer|null $finansinntektAnnenField public property
     */
    public $finansinntektAnnenField;

    /**
     * @todo Write general description for this property
     * @var integer|null $finansinntektField public property
     */
    public $finansinntektField;

    /**
     * @todo Write general description for this property
     * @var integer|null $verdiendringMarFinOmlopsmidlerField public property
     */
    public $verdiendringMarFinOmlopsmidlerField;

    /**
     * @todo Write general description for this property
     * @var integer|null $nedskrivningMarFinOmlopsmidlerField public property
     */
    public $nedskrivningMarFinOmlopsmidlerField;

    /**
     * @todo Write general description for this property
     * @var integer|null $nedskrivningFinAnleggsmidlerField public property
     */
    public $nedskrivningFinAnleggsmidlerField;

    /**
     * @todo Write general description for this property
     * @var integer|null $rentekostnadKonsernField public property
     */
    public $rentekostnadKonsernField;

    /**
     * @todo Write general description for this property
     * @var integer|null $annenRentekostnadField public property
     */
    public $annenRentekostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $annenFinanskostnadField public property
     */
    public $annenFinanskostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $finanskostnadField public property
     */
    public $finanskostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $ordResultatForSkattField public property
     */
    public $ordResultatForSkattField;

    /**
     * @todo Write general description for this property
     * @var integer|null $skattOrdResultatField public property
     */
    public $skattOrdResultatField;

    /**
     * @todo Write general description for this property
     * @var integer|null $ordResultatField public property
     */
    public $ordResultatField;

    /**
     * @todo Write general description for this property
     * @var integer|null $ekstraordInntektField public property
     */
    public $ekstraordInntektField;

    /**
     * @todo Write general description for this property
     * @var integer|null $ekstraordKostnadField public property
     */
    public $ekstraordKostnadField;

    /**
     * @todo Write general description for this property
     * @var integer|null $skattEkstraordResultatField public property
     */
    public $skattEkstraordResultatField;

    /**
     * @todo Write general description for this property
     * @var integer|null $sumSkattField public property
     */
    public $sumSkattField;

    /**
     * @todo Write general description for this property
     * @var integer|null $minoritetsInteresserField public property
     */
    public $minoritetsInteresserField;

    /**
     * @todo Write general description for this property
     * @var integer|null $arsResultatField public property
     */
    public $arsResultatField;

    /**
     * @todo Write general description for this property
     * @var integer|null $konsernbidragField public property
     */
    public $konsernbidragField;

    /**
     * @todo Write general description for this property
     * @var integer|null $utbytteField public property
     */
    public $utbytteField;

    /**
     * @todo Write general description for this property
     * @var integer|null $tilFondVurdForField public property
     */
    public $tilFondVurdForField;

    /**
     * @todo Write general description for this property
     * @var integer|null $tilAnnenEgenkapitalField public property
     */
    public $tilAnnenEgenkapitalField;

    /**
     * @todo Write general description for this property
     * @var integer|null $tapKravField public property
     */
    public $tapKravField;

    /**
     * All additional properties for this model
     * @var array $additionalProperties public property
     */
    public $additionalProperties = array();

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $regnskapsAvArField                  Initialization value for $this->regnskapsAvArField
     * @param integer $regnskapsAvMndField                 Initialization value for $this->regnskapsAvMndField
     * @param integer $totalinntektField                   Initialization value for $this->totalinntektField
     * @param integer $salgsinntekterField                 Initialization value for $this->salgsinntekterField
     * @param integer $annenDriftsinntektField             Initialization value for $this->annenDriftsinntektField
     * @param integer $varekostnadField                    Initialization value for $this->varekostnadField
     * @param integer $beholdningsendringField             Initialization value for $this->beholdningsendringField
     * @param integer $lonnskostnadField                   Initialization value for $this->lonnskostnadField
     * @param integer $avskrivningerField                  Initialization value for $this->avskrivningerField
     * @param integer $nedskrivningerField                 Initialization value for $this->nedskrivningerField
     * @param integer $annenDriftskostnadField             Initialization value for $this->annenDriftskostnadField
     * @param integer $driftsResultatField                 Initialization value for $this->driftsResultatField
     * @param integer $inntektInvDatterField               Initialization value for $this->inntektInvDatterField
     * @param integer $inntektInvKonsernField              Initialization value for $this->inntektInvKonsernField
     * @param integer $inntektInvAnnenField                Initialization value for $this->inntektInvAnnenField
     * @param integer $renteinntektKonsernField            Initialization value for $this->renteinntektKonsernField
     * @param integer $renteinntektAnnenField              Initialization value for $this->renteinntektAnnenField
     * @param integer $finansinntektAnnenField             Initialization value for $this->finansinntektAnnenField
     * @param integer $finansinntektField                  Initialization value for $this->finansinntektField
     * @param integer $verdiendringMarFinOmlopsmidlerField Initialization value for $this-
     *                                                       >verdiendringMarFinOmlopsmidlerField
     * @param integer $nedskrivningMarFinOmlopsmidlerField Initialization value for $this-
     *                                                       >nedskrivningMarFinOmlopsmidlerField
     * @param integer $nedskrivningFinAnleggsmidlerField   Initialization value for $this-
     *                                                       >nedskrivningFinAnleggsmidlerField
     * @param integer $rentekostnadKonsernField            Initialization value for $this->rentekostnadKonsernField
     * @param integer $annenRentekostnadField              Initialization value for $this->annenRentekostnadField
     * @param integer $annenFinanskostnadField             Initialization value for $this->annenFinanskostnadField
     * @param integer $finanskostnadField                  Initialization value for $this->finanskostnadField
     * @param integer $ordResultatForSkattField            Initialization value for $this->ordResultatForSkattField
     * @param integer $skattOrdResultatField               Initialization value for $this->skattOrdResultatField
     * @param integer $ordResultatField                    Initialization value for $this->ordResultatField
     * @param integer $ekstraordInntektField               Initialization value for $this->ekstraordInntektField
     * @param integer $ekstraordKostnadField               Initialization value for $this->ekstraordKostnadField
     * @param integer $skattEkstraordResultatField         Initialization value for $this-
     *                                                       >skattEkstraordResultatField
     * @param integer $sumSkattField                       Initialization value for $this->sumSkattField
     * @param integer $minoritetsInteresserField           Initialization value for $this->minoritetsInteresserField
     * @param integer $arsResultatField                    Initialization value for $this->arsResultatField
     * @param integer $konsernbidragField                  Initialization value for $this->konsernbidragField
     * @param integer $utbytteField                        Initialization value for $this->utbytteField
     * @param integer $tilFondVurdForField                 Initialization value for $this->tilFondVurdForField
     * @param integer $tilAnnenEgenkapitalField            Initialization value for $this->tilAnnenEgenkapitalField
     * @param integer $tapKravField                        Initialization value for $this->tapKravField
     */
    public function __construct()
    {
        if (40 == func_num_args()) {
            $this->regnskapsAvArField                  = func_get_arg(0);
            $this->regnskapsAvMndField                 = func_get_arg(1);
            $this->totalinntektField                   = func_get_arg(2);
            $this->salgsinntekterField                 = func_get_arg(3);
            $this->annenDriftsinntektField             = func_get_arg(4);
            $this->varekostnadField                    = func_get_arg(5);
            $this->beholdningsendringField             = func_get_arg(6);
            $this->lonnskostnadField                   = func_get_arg(7);
            $this->avskrivningerField                  = func_get_arg(8);
            $this->nedskrivningerField                 = func_get_arg(9);
            $this->annenDriftskostnadField             = func_get_arg(10);
            $this->driftsResultatField                 = func_get_arg(11);
            $this->inntektInvDatterField               = func_get_arg(12);
            $this->inntektInvKonsernField              = func_get_arg(13);
            $this->inntektInvAnnenField                = func_get_arg(14);
            $this->renteinntektKonsernField            = func_get_arg(15);
            $this->renteinntektAnnenField              = func_get_arg(16);
            $this->finansinntektAnnenField             = func_get_arg(17);
            $this->finansinntektField                  = func_get_arg(18);
            $this->verdiendringMarFinOmlopsmidlerField = func_get_arg(19);
            $this->nedskrivningMarFinOmlopsmidlerField = func_get_arg(20);
            $this->nedskrivningFinAnleggsmidlerField   = func_get_arg(21);
            $this->rentekostnadKonsernField            = func_get_arg(22);
            $this->annenRentekostnadField              = func_get_arg(23);
            $this->annenFinanskostnadField             = func_get_arg(24);
            $this->finanskostnadField                  = func_get_arg(25);
            $this->ordResultatForSkattField            = func_get_arg(26);
            $this->skattOrdResultatField               = func_get_arg(27);
            $this->ordResultatField                    = func_get_arg(28);
            $this->ekstraordInntektField               = func_get_arg(29);
            $this->ekstraordKostnadField               = func_get_arg(30);
            $this->skattEkstraordResultatField         = func_get_arg(31);
            $this->sumSkattField                       = func_get_arg(32);
            $this->minoritetsInteresserField           = func_get_arg(33);
            $this->arsResultatField                    = func_get_arg(34);
            $this->konsernbidragField                  = func_get_arg(35);
            $this->utbytteField                        = func_get_arg(36);
            $this->tilFondVurdForField                 = func_get_arg(37);
            $this->tilAnnenEgenkapitalField            = func_get_arg(38);
            $this->tapKravField                        = func_get_arg(39);
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
        $json['regnskapsAvArField']                  = $this->regnskapsAvArField;
        $json['regnskapsAvMndField']                 = $this->regnskapsAvMndField;
        $json['totalinntektField']                   = $this->totalinntektField;
        $json['salgsinntekterField']                 = $this->salgsinntekterField;
        $json['annenDriftsinntektField']             = $this->annenDriftsinntektField;
        $json['varekostnadField']                    = $this->varekostnadField;
        $json['beholdningsendringField']             = $this->beholdningsendringField;
        $json['lonnskostnadField']                   = $this->lonnskostnadField;
        $json['avskrivningerField']                  = $this->avskrivningerField;
        $json['nedskrivningerField']                 = $this->nedskrivningerField;
        $json['annenDriftskostnadField']             = $this->annenDriftskostnadField;
        $json['driftsResultatField']                 = $this->driftsResultatField;
        $json['inntektInvDatterField']               = $this->inntektInvDatterField;
        $json['inntektInvKonsernField']              = $this->inntektInvKonsernField;
        $json['inntektInvAnnenField']                = $this->inntektInvAnnenField;
        $json['renteinntektKonsernField']            = $this->renteinntektKonsernField;
        $json['renteinntektAnnenField']              = $this->renteinntektAnnenField;
        $json['finansinntektAnnenField']             = $this->finansinntektAnnenField;
        $json['finansinntektField']                  = $this->finansinntektField;
        $json['verdiendringMarFinOmlopsmidlerField'] = $this->verdiendringMarFinOmlopsmidlerField;
        $json['nedskrivningMarFinOmlopsmidlerField'] = $this->nedskrivningMarFinOmlopsmidlerField;
        $json['nedskrivningFinAnleggsmidlerField']   = $this->nedskrivningFinAnleggsmidlerField;
        $json['rentekostnadKonsernField']            = $this->rentekostnadKonsernField;
        $json['annenRentekostnadField']              = $this->annenRentekostnadField;
        $json['annenFinanskostnadField']             = $this->annenFinanskostnadField;
        $json['finanskostnadField']                  = $this->finanskostnadField;
        $json['ordResultatForSkattField']            = $this->ordResultatForSkattField;
        $json['skattOrdResultatField']               = $this->skattOrdResultatField;
        $json['ordResultatField']                    = $this->ordResultatField;
        $json['ekstraordInntektField']               = $this->ekstraordInntektField;
        $json['ekstraordKostnadField']               = $this->ekstraordKostnadField;
        $json['skattEkstraordResultatField']         = $this->skattEkstraordResultatField;
        $json['sumSkattField']                       = $this->sumSkattField;
        $json['minoritetsInteresserField']           = $this->minoritetsInteresserField;
        $json['arsResultatField']                    = $this->arsResultatField;
        $json['konsernbidragField']                  = $this->konsernbidragField;
        $json['utbytteField']                        = $this->utbytteField;
        $json['tilFondVurdForField']                 = $this->tilFondVurdForField;
        $json['tilAnnenEgenkapitalField']            = $this->tilAnnenEgenkapitalField;
        $json['tapKravField']                        = $this->tapKravField;

        return array_merge($json, $this->additionalProperties);
    }
}
