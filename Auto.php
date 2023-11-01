<?php
require_once 'Fahrzeug.php';

class Auto extends Fahrzeug
{
    public function setBaujahr(int $baujahr): void
    {
        if ($baujahr <= 1900) {
            echo 'das kann nicht sein das erste Fahrzeug wurde 1900 gebaut.';
        } else {
            $this->baujahr = $baujahr;
        }
    }


    function aktuelleReichweite(): int
    {
        return $this->getEnergiespeicher()/$this->getAktuellerVerbrauch()*100;
    }
}
$vw = new Auto('VW','Golf',2002,50000,180,600,60);

 $vw->setGeschwindigkeit(20);
 $vw->setAktuellerVerbrauch(5);

 print_r($vw);

 echo $vw->aktuelleReichweite();