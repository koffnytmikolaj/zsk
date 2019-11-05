<?php
    function value($a){
        if ($a < 0){
            return 'ujemna';
        }else if ($a == 0){
            return 'zero';
        } else
            return 'dodatnia';
    }

    
    echo value(10), '<br>'; //dodatnia

    function getValue():int{
        return 20.99;
    }

    echo getValue(), '<br>'; //20
    echo gettype(getValue()), '<br>'; //integer

    //zasięg zmiennych
    $x = 10; //zmienna globalna

    function Show1(){
        echo "Wartość zmiennej x wynosi: ";
        echo $GLOBALS['x'], '<br>';
        
        /*
            lub
            echo "Wartość zmiennej x wynosi: $GLOBALS[x];
        */
    }

    Show1(); // Wartość zmiennej x wynosi: 10
    
    $y = 10; //zmienna globalna

    function Show2(){
        global $y;
        echo "Wartość zmiennej y wynosi: $y<br>";
    }

    Show2(); // Wartość zmiennej x wynosi: 10
    

    function suma(){
        static $number = 10;
        echo "\$number wynosi: $number<br>";
        $number += 10;
    }

    suma(); //10
    suma(); //20
    suma(); //30

    //#########################################################

    //argumenty
    function add($x, $y = 1){
        return $x + $y;
    }

    echo add(2), '<br>'; //3
    echo add(2,4), '<br>'; //6

    //###################################

    //argumenty i typy danych
    function multi(float $x, int $y){
        return $x * $y;
    }

    echo multi(5.25, 7), '<br>'; //36.75
    echo multi(3, 2.5), '<br>'; //6
?>