<?php

if (
    !isset($_POST["numero-1"])
    || !isset($_POST["numero-2"])
    || !isset($_POST["numero-3"])
    || !isset($_POST["numero-4"])
    || !isset($_POST["numero-5"])
) {

    header("location: index.php");
}

$numero_1  = $_POST["numero-1"];
$numero_2  = $_POST["numero-2"];
$numero_3  = $_POST["numero-3"];
$numero_4  = $_POST["numero-4"];
$numero_5  = $_POST["numero-5"];



$array = array($numero_1, $numero_2, $numero_3, $numero_4, $numero_5);


$soma = 0;
for ($i = 0; $i <count($array); $i++ ){
    $soma += $array[$i];
}

echo "<h1>A soma dos cinco números informados é: <em style='color: green; font-size: 3rem;' > $soma </em></h1>";