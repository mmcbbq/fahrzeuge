<?php


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

