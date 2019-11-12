<?php
    
    function showArray($tab){
        for($i = 0;$i < count($tab); $i++){
            $elem = $i + 1;
            echo "Element $elem: $tab[$i]";
        }
    }
    function tab3($tab){
        foreach($tab as $value){
            echo $value, " ";
        }
        echo '<br>';
    }
    

    $data = array(
        'name' => 'Janusz',
        'surname' => 'Nowak',
        'age' => 20
    );
    foreach ($data as $value){ //wywoływanie tablicy
        echo "$value ";
    }
    echo "<hr>";
    foreach ($data as $key => $value){ // -"-
        echo "$key: $value<br>";
    }
    echo "<hr>";

    $student = array(
        array(
            'Anna',
            'Nowak',
            20
        ),
        array(
            'Tomasz'
        ),
        array(
            'Paweł',
            'Nowak',
            20,
            'Poznań'
        )
    );

    for ($i = 0; $i < count($student); $i++){
        for($j = 0; $j < count($student[$i]); $j++){
            echo $student[$i][$j], " ";
        }
        echo "<br>";
    }

    echo "<br>";

    foreach ($student as $number){
        foreach ($number as $value){
            echo $value, " ";
        }
        echo "<br>";
    }
    echo "<hr>";

    /*Napisać funkcję wyświetlającą tablicę 3-wymiarową*/

####################################################################
//sortowanie

    $tab = array(
        10,
        1,
        5,
        75,
        -4,
        1000,
        100
    );
    //niemalejąco
    sort($tab);
    tab3($tab);
    echo "<br>";
    //nierosnąco
    rsort($tab);
    tab3($tab);
    echo "<br>";

###################################################################

    $tab2 = array(
        "katarzyna",
        "anna",
        "zenon",
        "paweł"
    );
    tab3($tab2);
    sort($tab2);
    echo "<br>";
    tab3($tab2);
    echo "<br>";

    $tabAssoc = array(
        "surname" => "Nowak",
        "name" => "Andrzej",
        "age" => 30,
        "city" => "Poznań"
    );
    tab3($tabAssoc);
    sort($tabAssoc);
    tab3($tabAssoc);
    asort($tabAssoc); //do sortowania asocjacyjnej
    tab3($tabAssoc);
    arsort($tabAssoc); //też
    tab3($tabAssoc);
    ksort($tabAssoc); //do sortowania asocjacyjnej wg klucza
    tab3($tabAssoc);
    krsort($tabAssoc); //też
    tab3($tabAssoc);

    #################################################
    print_r($tabAssoc);
    echo "<br>";
    var_dump($tabAssoc);
    echo "<pre>";
    print_r($tabAssoc);
    echo "</pre>";
?>