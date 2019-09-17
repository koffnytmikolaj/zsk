<?php
    $number = 1;
    $_number = 1;
    
    $Imię = 1;
    echo '$number';
    echo "$number";

    $prawda = true;
    $falsz = false;
    $calkowita = 100;
    $szesnastkowa = 0xA;
    echo "<br>$szesnastkowa";
    $osemkowa = 010;
    echo '<br>'.$osemkowa;
    $binarna = 0b10101;
    echo '<br>',$binarna;

    $imie = "Janusz";
    $napis = <<< TEKST
        Masz na imię: $imie<br>
        Twój wiek: $wiek
        
    TEKST;
    echo $napis;
?>