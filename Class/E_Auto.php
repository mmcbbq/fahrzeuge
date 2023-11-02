<?php
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


