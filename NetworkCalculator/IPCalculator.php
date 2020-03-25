<?php

class IPCalculator {

    function maska($prefix) {
        $maska = null;
        for ($i = 0; $i < $prefix; $i++) {
            $maska .= 1;
        }
        for ($prefix; $prefix < 32; $prefix++) {
            $maska .= 0;
        }

        $arrMaska = str_split($maska, 8);

        return bindec($arrMaska[0]) . "." . bindec($arrMaska[1]) . "." . bindec($arrMaska[2]) . "." . bindec($arrMaska[3]);
    }
}
