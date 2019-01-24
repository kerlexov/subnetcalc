<?php
require_once(__DIR__ . '/vendor/autoload.php');
include 'submreza.php';


$oct1=$_POST["oct1"];
$oct2=$_POST["oct2"];
$oct3=$_POST["oct3"];
$oct4=$_POST["oct4"];

$maska=$_POST["maska"];

$ip=$oct1.'.'.$oct2.'.'.$oct3.'.'.$oct4;

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
            <thead>
            <tr>
                <th>Output</th>
            </tr>
            </thead>
            <tr>
                <td><?php
                    $sub = new mreza(0,$ip, $maska,0);
                   // echo $json = json_encode($sub);?></td>
            </tr>
        <tr>
            <td>
                <?php
                echo $sub->getReport2();?>
            </td>
        </tr>
        </table>
    </div>
</div>
</body>
</html>
<?php
//$sub = new IPv4\SubnetCalculator($ip,$maska);
//$string_report = $sub->getPrintableReport();
//echo $json = json_encode($sub);
//print($sub);c
//echo $sub->printSubnetReport();

