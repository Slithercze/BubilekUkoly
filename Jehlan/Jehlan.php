<?php
include "ITeleso.php";
class Jehlan implements ITeleso{
    private $a = 10;
    private $v = 12;

    function vyska(){
        $Vs = sqrt(pow($this->v,2)+pow(($this->a/2),2)); //zakladni vzorec pro vypocet vysky strany
        return $Vs;
    }
    
    function plast(){
        $Spl = 4 * $this->a*$this->vyska() / 2; //vypocet plaste
        return $Spl;
    }
    function podstava(){ //vypocet podstavy
        $Sp = $this->a*$this->a;
        return $Sp;
    }
    public function povrch(): float{
        
        $S = $this->podstava() + $this->plast();
        return $S;
    }
    public function objem(): float{
        $V = 1/3 * pow($this->a, 2) * $this->v;
        return $V;
    }
    public function is3D(): bool{ // $r > 0 //testuje je li objekt torjrozmerny 
       if($this->a > 0){
           return true;
       }
       return false;
    } 
    public function pocetVrcholu(): int{ //vraci pocet vrcholu telesa
        $i = 5; //jelikož jehlan má podstavu čtverce a ten má 4 vrcholy a jeste ma vysku jako jeden vrchol tak to je 5 vrcholů
        return $i;
    } 
    public function info(){ //vygenerujes retezec informujici o telesu (nazev a rozmery)
        echo "Jehlan má stranu <b>a</b> = " . $this->a . "cm a <b>výšku</b> " . $this->v ."cm</br>";
        echo "Výška strany je ". $this->vyska(). "cm</br>"; //pres ostatni funkce ve tride pristupujeme slovem $this->
        echo "Podstava jehlanu je ". $this->podstava()."cm<sup>2</sup></br>";
        echo "Plášť jehlanu je ". $this->plast()."cm<sup>2</sup></br>";
    }
}