<?php
require_once(__DIR__ . '/vendor/autoload.php');
include 'submreza.php';
$ip='192.168.0.0';
$maska=16;
$default=1;
if($_GET!=null){
$ip=$_GET["adresa"];
$maska=$_GET["maska"];
$default=0;
}

if($default)
    echo "unos mreze tako da se u url upise report.php?adresa=192.168.0.0&maska=16<br>";
else
    echo "adresa je unesena<br>";

$sub = new mreza(0,$ip,$maska);
echo $sub->getReport();
//$sub = new IPv4\SubnetCalculator($ip,$maska);
//$string_report = $sub->getPrintableReport();
//echo $json = json_encode($sub);
//print($sub);c
//echo $sub->printSubnetReport();