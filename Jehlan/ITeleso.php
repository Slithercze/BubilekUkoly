<?php
use SkolaVDF\Matematika\Telesa;
interface ITeleso
{
    public function povrch(): float; //vypočte a vrátí povrch tělesa
    public function objem(): float; //vypočte a vrátí objem tělesa
    public function is3D(): bool; // $r > 0 //testuje je li objekt torjrozmerny 
    public function pocetVrcholu(): int; //vraci pocet vrcholu telesa
    public function info(); // vygenerujes retezec informujici o telesu (nazev a rozmery)
}
?>
