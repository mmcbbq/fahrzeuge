<?php
require_once 'Auto.php';
class E_Auto extends Auto
{


    private int $reichweite;

    /**
     * @param int $reichweite
     */

    public function __construct($funcmarke, $funcmodell, $funcbaujahr, $kilometerstand, $maxGeschwindigkeit,int $reichweite)
    {
        parent::__construct($funcmarke, $funcmodell, $funcbaujahr, $kilometerstand, $maxGeschwindigkeit);
        $this->reichweite = $reichweite;
    }

    public function setBaujahr(int $baujahr): void
    {
        if ($baujahr <= 2000) {
            echo 'das kann nicht sein das erste E Auto wurde 2000 gebaut.';
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



}


$e_vw = new E_Auto('VW','I3',1955,0,240,300);

echo $e_vw->getModell();


echo $e_vw->getReichweite();
