<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <style>
            td, th{
                border: 1px solid black;
                text-align: center;
            }
            .red{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <div id="one">
            <?php
                $length_of_table = 10;
                $width_of_table = 10;
                $number_of_field_w = 1;
                echo "<table>";
                do{
                    $number_of_field_l = 1;
                    echo "<tr>";
                    do{
                        $x = $number_of_field_l * $number_of_field_w;
                        echo "<td>$x</td>";
                        $number_of_field_l ++;
                    }while($number_of_field_l <= $length_of_table);
                    echo "</tr>";
                    $number_of_field_w ++;
                }while($number_of_field_w <= $width_of_table);
                echo "</table>";
            ?>
        </div>
        <br>
        <div id="two">
            <?php
                $length_of_table = 10;
                $width_of_table = 10;
                $number_of_field_w = 1;
                echo "<table>";
                do{
                    $number_of_field_l = 1;
                    echo "<tr>";
                    do{
                        $x = $number_of_field_l * $number_of_field_w;
                        if($number_of_field_l == $number_of_field_w)
                            echo "<td>*</td>";
                        else
                            echo "<td>$x</td>";
                        $number_of_field_l ++;
                    }while($number_of_field_l <= $length_of_table);
                    echo "</tr>";
                    $number_of_field_w ++;
                }while($number_of_field_w <= $width_of_table);
                echo "</table>";
            ?>
        </div>
        <br>
        <div id="three">
            <?php
                $length_of_table = 10;
                $width_of_table = 10;
                $number_of_field_w = 1;
                echo "<table>";
                do{
                    $number_of_field_l = 1;
                    echo "<tr>";
                    do{
                        $x = $number_of_field_l * $number_of_field_w;
                        if($number_of_field_l == $number_of_field_w)
                            echo "<td class='red'>$x</td>";
                        else
                            echo "<td>$x</td>";
                        $number_of_field_l ++;
                    }while($number_of_field_l <= $length_of_table);
                    echo "</tr>";
                    $number_of_field_w ++;
                }while($number_of_field_w <= $width_of_table);
                echo "</table>";
            ?>
        </div>
        <br>
        <div id="four">
            <?php
                $length_of_table = 10;
                $width_of_table = 10;
                $number_of_field_w = 1;
                echo "<table>";
                do{
                    $number_of_field_l = 1;
                    echo "<tr>";
                    do{
                        $x = $number_of_field_l * $number_of_field_w;
                        if($number_of_field_l == $length_of_table - $number_of_field_w + 1)
                            echo "<td class='red'>$x</td>";
                        else
                            echo "<td>$x</td>";
                        $number_of_field_l ++;
                    }while($number_of_field_l <= $length_of_table);
                    echo "</tr>";
                    $number_of_field_w ++;
                }while($number_of_field_w <= $width_of_table);
                echo "</table>";
            ?>
            <br>
        <div id="five">
            <?php
                $length_of_table = 10;
                $width_of_table = 10;
                $number_of_field_w = 1;
                $number_of_field_l = 1;
                echo "<table> <tr> <th></th>";
                do{
                    echo "<th>$number_of_field_l</th>";
                    $number_of_field_l ++;
                }while($number_of_field_l <= $length_of_table);
                echo "</th>";
                do{
                    $number_of_field_l = 1;
                    echo "<tr><th>$number_of_field_w</th>";
                    do{
                        $x = $number_of_field_l * $number_of_field_w;
                        echo "<td>$x</td>";
                        $number_of_field_l ++;
                    }while($number_of_field_l <= $length_of_table);
                    echo "</tr>";
                    $number_of_field_w ++;
                }while($number_of_field_w <= $width_of_table);
                echo "</table>";
            ?>
        </div>
    </body>
</html>
