<?php
require_once(__DIR__ . '/vendor/autoload.php');
include 'submreza.php';
//dva polja jedan za zahtjev korisnika drugi daje subnet masku za tu unesenu velicinu
$poljeaddr=array();
$poljemaska=array();
//adresa i subnet maska po kojoj se sumeriziraju unesene mreze
//$adresa='192.168.10.0';
//$adresa=$_POST["ip"];
$oct1=$_POST["oct1"];
$oct2=$_POST["oct2"];
$oct3=$_POST["oct3"];
$oct4=$_POST["oct4"];
$adresa=$oct1.'.'.$oct2.'.'.$oct3.'.'.$oct4;
//$maska=24;
//$maska=$_POST["maska"];
$klasa=$_POST["klasa"];
$raz="</br></br>";$sumhost=0;$sumhostm=0;
//ulaz
$subnet0=$_POST["subnet0"];$subnet1=$_POST["subnet1"];$subnet2=$_POST["subnet2"];$subnet3=$_POST["subnet3"];$subnet4=$_POST["subnet4"];$subnet5=$_POST["subnet5"];$subnet6=$_POST["subnet6"];$subnet7=$_POST["subnet7"];$subnet8=$_POST["subnet8"];$subnet9=$_POST["subnet9"];
if($subnet0>0){    array_push($poljeaddr,$subnet0);}if($subnet1>0){    array_push($poljeaddr,$subnet1);}if($subnet2>0){    array_push($poljeaddr,$subnet2);}if($subnet3>0){    array_push($poljeaddr,$subnet3);}if($subnet4>0){    array_push($poljeaddr,$subnet4);}if($subnet5>0){    array_push($poljeaddr,$subnet5);}if($subnet6>0){    array_push($poljeaddr,$subnet6);}if($subnet7>0){    array_push($poljeaddr,$subnet7);}if($subnet8>0){    array_push($poljeaddr,$subnet8);}if($subnet9>0){    array_push($poljeaddr,$subnet9);}
//sortiraj polje korisnickih zahtjeva (npr broj racunala u ucionici)
rsort($poljeaddr);
//nadi masku za odreden broj korisnika
for($x = 0; $x < count($poljeaddr); $x++) {
//   echo $poljeaddr[$x];
    $sumhost += $poljeaddr[$x];
    for ($i = 0; $i <= 32; $i++) {
        $s = (2 ** $i - 2) - $poljeaddr[$x];
        if ($s >= 0) {
            $subnetm = 32 - $i;
            if ($subnetm > 0) {
                array_push($poljemaska, $subnetm);
                break;
            }
        }
    }
}
function getmaxhost($polje){
    $max = 2**(32-($polje))-2;
    return $max;
}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <table>
            <tbody>
<?php
//nulta mreza(najveca)
$sub0=new mreza(0,$adresa,$poljemaska[0],$poljeaddr[0]);?>
<tr>
    <td><?php echo $sub0->getReport();?></td>
</tr>
<?php
//prva mreza
if($poljemaska[1]>0){
    $sub1=new mreza(1,$sub0->getSledeca(),$poljemaska[1],$poljeaddr[1]);?>
    <tr>
    <td><?php echo $sub1->getReport();}?></td>
</tr>
 <?php
//druga mreza
if($poljemaska[2]>0){
    $sub2=new mreza(2,$sub1->getSledeca(),$poljemaska[2],$poljeaddr[2]);?>
    <tr>
    <td><?php echo $sub2->getReport();}?></td>
</tr>
<?php
//treca
if($poljemaska[3]>0){
    $sub3=new mreza(3,$sub2->getSledeca(),$poljemaska[3],$poljeaddr[3]);?>
   <tr>
    <td><?php echo $sub3->getReport();}?></td>
</tr>
<?php
//cet
if($poljemaska[4]>0){
    $sub4=new mreza(4,$sub3->getSledeca(),$poljemaska[4],$poljeaddr[4]);?>
     <tr>
    <td><?php echo $sub4->getReport();}?></td>
</tr>
<?php
//peta
if($poljemaska[5]>0){
    $sub5=new mreza(5,$sub4->getSledeca(),$poljemaska[5],$poljeaddr[5]);?>
     <tr>
    <td><?php echo $sub5->getReport();}?></td>
</tr>
<?php
//sesta
if($poljemaska[6]>0){
    $sub6=new mreza(6,$sub5->getSledeca(),$poljemaska[6],$poljeaddr[6]);?>
  <tr>
    <td><?php echo $sub6->getReport();}?></td>
</tr>
<?php
//sedma
if($poljemaska[7]>0){
    $sub7=new mreza(7,$sub6->getSledeca(),$poljemaska[7],$poljeaddr[7]);?>
    <tr>
    <td><?php echo $sub7->getReport();}?></td>
</tr>
<?php
//osma
if($poljemaska[8]>0){
    $sub8=new mreza(8,$sub7->getSledeca(),$poljemaska[8],$poljeaddr[8]);?>
    <tr>
    <td><?php echo $sub8->getReport();}?></td>
</tr>
<?php
//deveta
if($poljemaska[9]>0){
    $sub9=new mreza(9,$sub8->getSledeca(),$poljemaska[9],$poljeaddr[9]);?>
    <tr>
    <td><?php echo $sub9->getReport();}?></td>
</tr></tbody>
            <?php
            $maxhosts=$sub0->max+$sub1->max+$sub2->max+$sub3->max+$sub4->max+$sub5->max+$sub6->max+$sub7->max+$sub8->max+$sub9->max;
            for ($i=0;$i<=32;$i++){
                $s=(2**$i-2)-$maxhosts;
                if($s>=0){
                    $sumhostm=32-$i;
                    break;
                }
            }

            if($sumhost>getmaxhost($sumhostm)){
                $error= "ERROR: broj hostova ne stane u subnet!";
                echo "<script type='text/javascript'>alert('$error');</script>";
                $sub=null;
                if(!$sub){
                    echo "<script>window.location.href = 'index.php';</script>";
                }
            }
            ?>
    <thead>
       <tr>
        <th>summary adresa/maska <?php echo $adresa."/".$sumhostm; ?></th>
           <th>broj hostova/max hostova <?php echo $sumhost."/".getmaxhost($sumhostm); ?></th>
    </tr>
    </thead></table>
    </div>
</div>
</body>
</html>
