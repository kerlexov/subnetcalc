<?php
require_once(__DIR__ . '/vendor/autoload.php');
include 'submreza.php';
//dva polja jedan za zahtjev korisnika drugi daje subnet masku za tu unesenu velicinu
$poljeaddr=array();
$poljemaska=array();
//adresa i subnet maska po kojoj se sumeriziraju unesene mreze
$adresa='192.168.10.0';
$maska=24;
$raz="</br></br>";$sumhost=0;$sumhostm=0;
//TODO treba unos prilagodit korisniku
$subnet0=62;$subnet1=126;$subnet2=30;$subnet3=0;$subnet4=0;$subnet5=0;$subnet6=0;$subnet7=0;$subnet8=0;$subnet9=0;
if($subnet0>0){    array_push($poljeaddr,$subnet0);}
if($subnet1>0){    array_push($poljeaddr,$subnet1);}
if($subnet2>0){    array_push($poljeaddr,$subnet2);}
if($subnet3>0){    array_push($poljeaddr,$subnet3);}
if($subnet4>0){    array_push($poljeaddr,$subnet4);}
if($subnet5>0){    array_push($poljeaddr,$subnet5);}
if($subnet6>0){    array_push($poljeaddr,$subnet6);}
if($subnet7>0){    array_push($poljeaddr,$subnet7);}
if($subnet8>0){    array_push($poljeaddr,$subnet8);}
if($subnet9>0){    array_push($poljeaddr,$subnet9);}
//sortiraj polje korisnickih zahtjeva (npr broj racunala u ucionici)
rsort($poljeaddr);
$arrlen = count($poljeaddr);
for($x = 0; $x < $arrlen; $x++) {
    echo $poljeaddr[$x];
    $sumhost+=$poljeaddr[$x];
    for ($i=0;$i<=32;$i++){
        $s=(2**$i-2)-$poljeaddr[$x];
        if($s>=0){
            $subnetm=32-$i;
            if($subnetm>0){
                array_push($poljemaska,$subnetm);
                break;}
        }
    }
    echo "/";
    echo $poljemaska[$x];
    echo "<br>";
}
if($maska>=$poljemaska[0]){    echo "mala maska";}
echo "</br>";
for ($i=0;$i<=32;$i++){
    $s=(2**$i-2)-$sumhost;
    if($s>=0){
        $sumhostm=32-$i;
        break;
    }
}
echo $sumhost;
echo "/";
echo $sumhostm;
echo "</br>";

//nulta mreza(najveca)
$sub0=new mreza(0,$adresa,$poljemaska[0]);
echo $sub0->getReport();
echo $raz;
//prva mreza
if($poljemaska[1]>0){
    $sub1=new mreza(1,$sub0->getSledeca(),$poljemaska[1]);
    echo $sub1->getReport();
    echo $raz;}
//druga mreza
if($poljemaska[2]>0){
    $sub2=new mreza(2,$sub1->getSledeca(),$poljemaska[2]);
    echo $sub2->getReport();
    echo $raz;}
//treca
if($poljemaska[3]>0){
    $sub3=new mreza(3,$sub2->getSledeca(),$poljemaska[3]);
    echo $sub3->getReport();
    echo $raz;}
//cet
if($poljemaska[4]>0){
    $sub4=new mreza(4,$sub3->getSledeca(),$poljemaska[4]);
    echo $sub4->getReport();
    echo $raz;}
//peta
if($poljemaska[5]>0){
    $sub5=new mreza(5,$sub4->getSledeca(),$poljemaska[5]);
    echo $sub5->getReport();
    echo $raz;}
//sesta
if($poljemaska[6]>0){
    $sub6=new mreza(6,$sub5->getSledeca(),$poljemaska[6]);
    echo $sub6->getReport();
    echo $raz;}
//sedma
if($poljemaska[7]>0){
    $sub7=new mreza(7,$sub6->getSledeca(),$poljemaska[7]);
    echo $sub7->getReport();
    echo $raz;}
//osma
if($poljemaska[8]>0){
    $sub8=new mreza(8,$sub7->getSledeca(),$poljemaska[8]);
    echo $sub8->getReport();
    echo $raz;}
//deveta
if($poljemaska[9]>0){
    $sub9=new mreza(9,$sub8->getSledeca(),$poljemaska[9]);
    echo $sub9->getReport();
    echo $raz;}
/*
//gets ip and mask from user
$sub=new \IPv4\SubnetCalculator($ip,$mask);
include 'calc.php';

//$sub->getSubnetJSONReport();
*/