<?php
    session_start();
    if(isset($_SESSION["error"])){
        echo "<div style=\"color: red;\">", $_SESSION["error"], "</div>";
    }
$connect = mysqli_connect("localhost", "root", "", "komis");
    echo <<< DOD
    <h3>Dodawanie uzytkownikow<h3>
    <form action="" method="post">
        <input type="text" placeholder="Imie" name="firstname" /></br>
        <input type="text" placeholder="Nazwisko" name="surname" /></br>
        <input type="date" name="date" /></br>
        <input type="submit" value="Dodaj" name="button" />
    </form>
    DOD;
    if(isset($_POST["button"]) && !empty($_POST["firstname"]) && !empty($_POST["surname"]) && !empty($_POST["date"])){
        unset($_SESSION["error"]);
        $firstname = $_POST["firstname"];
        $surname = $_POST["surname"];
        $date = $_POST["date"];
        
        $addUser_SQL = <<< SQL
        INSERT INTO `user`
        (`name`, `surname`, `birthday`)
        VALUES ('$firstname', '$surname', '$date');
        SQL;
        mysqli_query($connect, $addUser_SQL);
    }else{
        $_SESSION["error"] = "Wypełnij wszystkie pola!";
    }
?>
