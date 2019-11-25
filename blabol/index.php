<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Blábol</h1>

<a href="." class="tlacitko">Generuj další bláboly </a>

<div class="text">

<?php
$cislo = 200;
$slova = fgetcsv(fopen("slova.csv", "r"), 100000, ";");
$slovesa = fgetcsv(fopen("slovesa.csv", "r"), 100000, ";");
$predlozky = fgetcsv(fopen("predlozky.csv", "r"), 100000, ";");
for ($i = 0;$i < $cislo;$i++){
    if ($i == 0){
        echo ucfirst($slovesa[array_rand($slovesa)] . " " . $slova[array_rand($slova)] . " ");
    }
    else if ($i == $cislo-1) {
        echo $slova[array_rand($slova)].".";
    }
    else {
        echo $slovesa[array_rand($slovesa)] . " " . $slova[array_rand($slova)] . " " . $predlozky[array_rand($predlozky)] . " ";
    }
}

?>
</div>
</body>
</html>
