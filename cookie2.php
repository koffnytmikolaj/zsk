<?php
    session_start();
    echo <<< FORM
    <form method="post">
        <input type="text" name="name" placeholder="name" />
        <input type="text" name="surname" placeholder="surname" />
        <input type="submit" value="Click" />
    </form>
    FORM;
    if(!empty($_POST["name"]) && !empty($_POST["surname"])){
        $_SESSION["name"] = $_POST["name"];
        setcookie("surname", $_POST["surname"], time() + 60*60*24*2);
        $_COOKIE["surname"] = $_POST["surname"];
        echo "Imie: ", $_SESSION["name"], "<br>Nazwisko: ", $_COOKIE["surname"];
    }
?>
