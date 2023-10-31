<?php
require_once "Auto.php";
class E_Auto_vererbung extends Auto
{
    private int $reichweite;

    /**
     * @param int $reichweite
     */
    public function __construct(int $reichweite)
    {
        parent::__
        $this->reichweite = $reichweite;
    }


}

$vw = new E_Auto_vererbung(200);