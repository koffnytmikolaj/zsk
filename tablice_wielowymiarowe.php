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


    function tripletab ($array){
        echo "<ol>";
        foreach ($array as $continent => $value){
            echo "<li>", $continent, "</li><ul>";
            foreach ($value as $country => $value2){
                echo "<li>", $country, "</li><ul>";
                foreach ($value2 as $information => $value3){
                    echo "<li>", $information, ": ", $value3, "</li>";
                }
                echo "</ul>";
            }
            echo "</ul>";
        }
        echo "</ol>";
    }


    $world = array(
        "Europe" => array(
            "Poland" => array(
                "Capital" => "Warsaw",
                "Population" => 38000000
            ),
            "France" => array(
                "Capital" => "Paris",
                "Population" => 67000000
            ),
            "Germany" => array(
                "Capital" => "Berlin",
                "Population" => 83000000
            )
        ),
        "Asia" => array(
            "China" => array(
                "Capital" => "Beijing",
                "Population" => 1420000000
            ),
            "Japan" => array(
                "Capital" => "Tokyo",
                "Population" => 125500000
            ),
            "South Korea" => array(
                "Capital" => "Seoul",
                "Population" => 51000000
            )
        ),
        "North America" => array(
            "Canada" => array(
                "Capital" => "Ottawa",
                "Population" => 36700000
            ),
            "United States of America" => array(
                "Capital" => "Washington",
                "Population" => 326000000
            ),
            "Mexico" => array(
                "Capital" => "Mexico",
                "Population" => 124500000
            )
        )
    );

    tripletab($world);
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