<?php
    if(!empty($_GET["updateId"])){
        echo "<h3>Aktualizacja Użytkownika</h3>";
        $id = $_GET["updateId"];
        
        if(!empty($_POST["firstname"]) && !empty($_POST["surname"]) && !empty($_POST["birthday"])){
            $connect = mysqli_connect("localhost", "root", "", "komis");
            $firstname = $_POST["firstname"];
            $surname = $_POST["surname"];
            $birthday = $_POST["birthday"];
            
            $updateData_SQL = <<< SQL
            UPDATE `user` 
            SET `name`='$firstname',`surname`='$surname',`birthday`='$birthday'
            WHERE `id`=$id;
            SQL;
            
            mysqli_query($connect, $updateData_SQL);
            mysqli_close($connect);
            header("Location: dodawanie.php");
        }else{
            echo <<< FORM
            <form method="post">
                Imię:           <input type="text" name="firstname" /></br>
                Nazwisko:       <input type="text" name="surname" /></br>
                Data urodzenia: <input type="date" name="birthday" /></br>
                <input type="submit" value="Aktualizuj" />
            </form>
            FORM;
        }
    }else{
        header("Location: dodawanie.php");
    }
?>
