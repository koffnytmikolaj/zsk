<?php
    setcookie("city", "Poznań", time() + 60*60*24);
    setcookie("name", "Janusz", time() + 60*60*24);
    echo $_COOKIE["city"];

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    //setcookie("name", "", time() - 1); //usuniecie ciasteczka

    echo "<script>alert(\"Janusz\");</script>";
?>