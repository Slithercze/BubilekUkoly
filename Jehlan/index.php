<?php
require "Jehlan.php";

$a1 = new Jehlan;

$a1->info();
echo "Objem jehlanu je " . $a1->objem() . " cm<sup>3</sup></br>";
echo "Povrch jehlanu je ". $a1->povrch(), " cm<sup>2</sup></br>";
echo "Jehlan má ". $a1->pocetVrcholu(). " vrcholů</br>";
echo "Je jehlan trojrozměrný? : (".$a1->is3D(). ") [1 = ANO, 2 = NE]"; 