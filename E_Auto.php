<?php
require_once 'Fahrzeug.php';

class E_Auto extends Fahrzeug
{
    public function setBaujahr(int $baujahr): void
    {
        if ($baujahr <= 2000) {
            echo 'das kann nicht sein das erste E Fahrzeug wurde 2000 gebaut.';
        } else {
            $this->baujahr = $baujahr;
        }

    }
    /**
 * @return int
 */
public function getReichweite(): int
{
    return $this->reichweite;
}/**
 * @param int $reichweite
 */
public function setReichweite(int $reichweite): void
{
    $this->reichweite = $reichweite;
}


    function aktuelleReichweite(): int
    {
        return $this->getEnergiespeicher()/$this->getAktuellerVerbrauch()*100;
    }
}


$e_vw = new E_Auto('VW','I3',2020,0,240,300,100);
$e_vw->setGeschwindigkeit(20);
$e_vw->setAktuellerVerbrauch(2);
print_r($e_vw);
echo $e_vw->aktuelleReichweite();