<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            $length_of_table = 10;
            $width_of_table = 10;
            $number_of_field_w = 1;
            echo "<table>";
            do{
                $number_of_field_l = 1;
                echo "<tr>";
                do{
                    if($number_of_field_l == $number_of_field_w)
                    echo "<td>$number_of_field_l</td>";
                    $number_of_field_l ++;
                }while($number_of_field_l <= $length_of_table);
                echo "</tr>";
                $number_of_field_w ++;
            }while($number_of_field_w <= $width_of_table);
            echo "</table>";


        ?>
    </body>
</html>
