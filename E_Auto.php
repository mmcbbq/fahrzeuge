<?php
require_once ('Auto.php');
class E_Auto extends Auto
{
    private int $reichweite;
    public function __construct($funcmarke, $funcmodell, $funcbaujahr, $kilometerstand, $maxGeschwindigkeit, $reichweite)
    {
        parent::__construct($funcmarke, $funcmodell, $funcbaujahr, $kilometerstand, $maxGeschwindigkeit);
        $this->reichweite = $reichweite;
    }

    public function test()
    {
        return $this->kilometerstand;
    }


}

$eauto = new E_Auto('vw', 'test', 2020, 10000, 240, 500);
echo "\n";
echo $eauto->getGeschwindigkeit();