<?php
    $potega = 2**10;
    echo $potega;
    /*
        operatory bitowe
        
        and &
        or |
        not ~
        przesunięcie bitowe w lewo >>
        w prawo <<
    */
    $dziesiec = 0b1010;
    echo $dziesiec,'<br>';
    $dziesiec = $dziesiec >> 1;
    echo $dziesiec,"<br>";
    $dziesiec = $dziesiec << 2;
    echo $dziesiec, "<br>";
    /*
        operatory logiczne
        
        and &&
        or ||
        xor !
    */

    $sklep = 'otwarty';
    $pieniadze = 1800;
    $romet = true;
    $hulajnoha = false;
    if($sklep == 'otwarty' && $pieniadze > 1500 && ($romet == true || $hulajnoha == true)){
        if ($romet){
            echo "Kupiłeś rower";
        }
        else{
            echo "Kupiłeś hulajnogę";
        }
    }
    else echo "nic nie kupiłeś";

    echo '<hr>';

    $a = 1.0;
    $b = 1;
    if($a === $b){
        echo "takie same";
    }

    $x = 1;
    $y = 2;
    $wynik = $x <=> $y;

    echo gettype($x); //integer
    echo gettype($y); //double

    $x = 2;
    echo $x++;
    echo ++$x;
    echo $x;
    $y = $x;
    echo ++$y;
?>