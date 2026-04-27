<?php
class divisas{
    public static function dolar($n1){
        $dolar=$n1/70;
        $dolar=round($dolar*100)/100;
        return $dolar;
    }

    public static function euro($n1){
        $euro=$n1/74.58;
        $euro=round($euro*100)/100;
        return $euro;
    }

    public static function libra($n1){
        $libra=$n1/83.10;
        $libra=round($libra*100)/100;
        return $libra;
    }

    public static function yen($n1){
        $yen=$n1/0.63;
        $yen=round($yen*100)/100;
        return $yen;
    }
}

?>