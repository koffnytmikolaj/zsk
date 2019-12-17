<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sklep papierniczy</title>
        <style>
            table, td, th{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
            //Skrypt 1
            $connect = mysqli_connect("localhost", "root", "", "sklep");
            $sql = "SELECT nazwa FROM `towary` WHERE promocja = 1";
            mysqli_set_charset($connect, "utf8");
            $result = mysqli_query($connect, $sql);
            echo "<ul>";
            while($row = mysqli_fetch_assoc($result)){

                echo "<li>", $row["nazwa"], "</li>"; //tyle ile kolumn w towarach
            }
            echo "</ul>";
        ?>
        <form method="post">
            <select name="towar">
                <?php
                    $sql = "SELECT nazwa FROM towary";
                $result = mysqli_query($connect, $sql);
                while($option = mysqli_fetch_assoc($result)){
                    echo "<option value=\"$option[nazwa]\">", $option["nazwa"], "</option>";
                }
                ?>
            </select>
            <input type="submit" name="button" value="Wybierz" />
        </form>
        <?php
            //skrypt 2
            if(isset($_POST["towar"])){
                $towar = $_POST["towar"];
                
                $connect = mysqli_connect("localhost", "root", "", "sklep");
                $sql = "SELECT cena FROM towary WHERE nazwa='$towar'";
                mysqli_set_charset($connect, "utf8");
                $result = mysqli_query($connect, $sql);
                echo $towar;
                
                $row = mysqli_fetch_assoc($result);
                echo $row["cena"];
                $promocja = round($row["cena"] * 0.85, 2);
            }
            $sql = <<< SQL
            SELECT t.nazwa AS tnazwa, cena, promocja, idDostawcy, d.nazwa AS dnazwa
            FROM towary AS t
            JOIN dostawcy AS d
            ON d.id = t.idDostawcy;
            SQL;
            $result = mysqli_query($connect, $sql);
            echo "<table><tr><th>Nazwa</th><th>Cena</th><th>Cena promocyjna</th><th>ID Dostawcy</th><th>Dostawca</th></tr>";
            while($row = mysqli_fetch_assoc($result)){
                $cena = $row["cena"];
                if($row["promocja"])
                    $cena2 = round($cena * 0.85, 2);
                else $cena2 = $cena;
                echo "<tr><td>", $row["tnazwa"], "</td><td>", $cena, "</td><td>", $cena2, "</td><td>", $row["idDostawcy"], "</td><td>", $row["dnazwa"], "</tr>";
            }
            echo "</table>";
        ?>
    </body>
</html>
