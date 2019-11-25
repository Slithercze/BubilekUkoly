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
$slova = fgetcsv(fopen("slova.csv", "r"), 100000, ";");

for ($i = 0;$i < 500;$i++){
    if ($i == 0){
        echo ucfirst($slova[array_rand($slova)]." ");
    }
    else if ($i == 499) {
        echo $slova[array_rand($slova)].".";
    }
    else {
        echo $slova[array_rand($slova)]." ";
    }
}

?>
</div>
</body>
</html>