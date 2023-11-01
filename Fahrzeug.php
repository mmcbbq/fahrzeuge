<?php

abstract class Fahrzeug
{
    private static int $anzahl = 0;
    private string $marke;
    private string $modell;
    private int $baujahr;
    private int $kilometerstand;
    private int $maxGeschwindigkeit;
    private int $geschwindigkeit = 0;
    private int $reichweite;
    private int $energiespeicher;

    private int $aktuellerVerbrauch = 0;

    /**
     * @param string $marke
     * @param string $modell
     * @param int $baujahr
     * @param int $kilometerstand
     * @param int $maxGeschwindigkeit
     * @param int $geschwindigkeit
     * @param int $reichweite
     */
    public function __construct(string $marke, string $modell, int $baujahr, int $kilometerstand, int $maxGeschwindigkeit, int $reichweite, int $energiespeicher)
    {
        $this->marke = $marke;
        $this->modell = $modell;
        $this->setBaujahr($baujahr);
        $this->kilometerstand = $kilometerstand;
        $this->maxGeschwindigkeit = $maxGeschwindigkeit;
        $this->energiespeicher = $energiespeicher;
        $this->reichweite = $reichweite;
    }


    public function getMarke(): string
    {

        return $this->marke;
    }

    public function setMarke($marke): void
    {
        $this->marke = $marke;
    }

    /**
     * @return string
     */
    public function getModell(): string
    {
        return $this->modell;
    }

    /**
     * @param string $modell
     */
    public function setModell(string $modell): void
    {
        $this->modell = $modell;
    }

    /**
     * @return int
     */
    public function getBaujahr(): int
    {
        return $this->baujahr;
    }

    /**
     * @param int $baujahr
     */
    abstract public function setBaujahr(int $baujahr):void;


    /**
     * @return int
     */
    public function getKilometerstand(): int
    {
        return $this->kilometerstand;
    }

    /**
     * @param int $kilometerstand
     */
    public function setKilometerstand(int $kilometerstand): void
    {
        if ($kilometerstand < $this->kilometerstand) {
            echo $kilometerstand . ' ist kleiner als der aktuelle Kilometerstand';
        } else {
            $this->kilometerstand = $kilometerstand;
        }
    }

    /**
     * @return int
     */
    public function getMaxGeschwindigkeit(): int
    {
        return $this->maxGeschwindigkeit;
    }

    /**
     * @return int
     */
    public function getGeschwindigkeit(): int
    {
        return $this->geschwindigkeit;
    }

    /**
     * @param int $geschwindigkeit
     */
    public function setGeschwindigkeit(int $geschwindigkeit): void
    {
        if ($geschwindigkeit > $this->maxGeschwindigkeit) {
            $this->geschwindigkeit = $this->maxGeschwindigkeit;
        } else {
            $this->geschwindigkeit = $geschwindigkeit;
        }
    }

    /**
     * @return int
     */
    public static function getAnzahl(): int
    {
        return self::$anzahl;
    }

    /**
     * @return int
     */
    public function getReichweite(): int
    {
        return $this->reichweite;
    }

    /**
     * @param int $reichweite
     */
    public function setReichweite(int $reichweite): void
    {
        $this->reichweite = $reichweite;
    }

    abstract function aktuelleReichweite(): int;

    /**
     * @return int
     */
    public function getEnergiespeicher(): int
    {
        return $this->energiespeicher;
    }

    /**
     * @param int $energiespeicher
     */
    public function setEnergiespeicher(int $energiespeicher): void
    {
        $this->energiespeicher = $energiespeicher;
    }

    /**
     * @return int
     */
    public function getAktuellerVerbrauch(): int
    {
        return $this->aktuellerVerbrauch;
    }

    /**
     * @param int $aktuellerVerbrauch
     */
    public function setAktuellerVerbrauch(int $aktuellerVerbrauch): void
    {
        $this->aktuellerVerbrauch = $aktuellerVerbrauch;
    }





}
//

////$vw->setMarke('vw');
////$vw->setModell('Golf');
//
//echo $vw->getMarke();
//echo " \n" ;
//
//echo $vw->getModell();
//echo " \n" ;
//echo $vw->getBaujahr();
//echo " \n" ;
//echo $vw->getMaxGeschwindigkeit();
//echo " \n" ;
//echo $vw->getKilometerstand();
//echo " \n" ;
//$vw->setKilometerstand(200100);
//echo " \n" ;
//
//echo $vw->getKilometerstand();
//echo " \n" ;
//echo " \n" ;
//
//$vw->setGeschwindigkeit(200);
//
//echo " \n" ;
//echo $vw->getGeschwindigkeit();
//
//
//echo " \n" ;
//echo " \n" ;
//echo " \n" ;
//
//
//
//
//
//
//
//$bmw = new Fahrzeug('BMW', '3', 2003, 100000, 260);
////$bmw->setMarke('Bmw');
////$bmw->setModell('3');
////$bmw->setBaujahr(2003);
////
//echo $bmw->getMarke();
//echo $bmw->getModell();
//echo $bmw->getBaujahr();
//echo $bmw->getMaxGeschwindigkeit();
//echo $bmw->getKilometerstand();
//echo " \n" ;
//
//$volvo = new Fahrzeug('Volvo', 'XC40', 2015, 50000, 260);
////$volvo->setMarke('Volvo');
////$volvo->setModell('xc40');
////$volvo->setBaujahr(2015);
////
//echo $volvo->getMarke();
//echo $volvo->getModell();
//echo $volvo->getBaujahr();
//echo $bmw->getMaxGeschwindigkeit();
//echo $bmw->getKilometerstand();
////print_r($vw);
//print_r($bmw);


//Fügt ein neues Klassenattribut geschwindigkeit hinzu inkl. get und setter methoden
//in der set_geschwindigkeit soll überprüft werden ob diese der erlaubten max geschwindigkeit entspricht
//in der set_kilometerstand soll überprüft werden ob dieser größer als der Aktuelle kilometerstand ist