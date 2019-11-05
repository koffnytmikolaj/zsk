<?php
    $colors = array('red', 'green', 'blue');
    echo "Początkowa zawartość tablicy:<br>";

    $colors[3] = 'magenta';

    for ($i = 0; $i < count($colors); $i++){
        $elem = $i + 1;
        echo "Element $elem: $colors[$i]<br>";
    }
?>