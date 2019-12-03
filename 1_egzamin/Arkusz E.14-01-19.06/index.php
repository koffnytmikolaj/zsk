<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Sklep papierniczy</title>
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
            mysqli_close($connect);
        ?>
        <form method="post">
            <select name="towar">
                <option value="cz">Czekolada</option>
                <option value="g">Grześki</option>
                <option value="b">Baton</option>
            </select>
            <input type="submit" name="button" value="Wybierz" />
        </form>
        <?php
            //skrypt 2
            if(isset($_POST["towar"])){
                $towar = $_POST["towar"];
                
                switch($towar){
                    case "cz" :
                        $towar = "czekolada";
                        break;
                    case "g" :
                        $towar = "grześki";
                        break;
                    case "b" :
                        $towar = "baton";
                        break;
                }
                
                $connect = mysqli_connect("localhost", "root", "", "sklep");
                $sql = "SELECT cena FROM towary WHERE nazwa='$towar'";
                mysqli_set_charset($connect, "utf8");
                $result = mysqli_query($connect, $sql);
                echo $towar;
                
                $row = mysqli_fetch_assoc($result);
                echo $row["cena"];
                $promocja = round($row["cena"] * 0.85, 2);
                mysqli_close($connect);
            }
        ?>
    </body>
</html>
