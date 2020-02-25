<?php
    
    echo "<table>";
    $connect = mysqli_connect("localhost", "root", "", "komis");
    $sql = <<< SQL
    SELECT *
    FROM `user`;
    SQL;
    $query = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_assoc($query)){
        $name = $row["name"];
        $surname = $row["surname"];
        $birthday = $row["birthday"];
        $year = substr($row["birthday"], 0, 4);
        $id = $row["id"];
        echo    "<tr>
                    <td>$name</td>
                    <td>$surname</td>
                    <td>$birthday</td>
                    <td>$year</td>
                    <td><a href=\"update_user.php?updateId=$id\">Aktualizuj</a></td>
                </tr>";
    }
    echo "</table>";
    echo    "<form method=\"post\" action=\"add_user.php\">
                <input type=\"submit\" value=\"Dodaj użytjownika\" name=\"dodaj\" />
            </form>";

    
    mysqli_close($connect);
?>
