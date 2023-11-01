<?php
function myAutoloader($className) {
    $classFile = $className . '.php';

    if (file_exists($classFile)) {
        include $classFile;
    }
}
spl_autoload_register('myAutoloader');



$vw = new Auto('VW','Golf',2002,50000,180,600,60);
$vw->setGeschwindigkeit(20);
$vw->setAktuellerVerbrauch(5);
print_r($vw);
echo $vw->aktuelleReichweite();








$e_vw = new E_Auto('VW','I3',2020,0,240,300,100);
$e_vw->setGeschwindigkeit(20);
$e_vw->setAktuellerVerbrauch(2);
print_r($e_vw);
echo $e_vw->aktuelleReichweite();



$lkw = new Lkw('MAN', 'XLKW', 1980,200000,80,1000,2000);
$lkw->setGeschwindigkeit(20);
$lkw->setAktuellerVerbrauch(5);
print_r($lkw);
echo $lkw->aktuelleReichweite();