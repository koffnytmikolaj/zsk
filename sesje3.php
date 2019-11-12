<?php
    session_start();
    unset($_SESSION['name']);
    session_destroy();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        Strona startowa<hr>
        Witamy <?php
            echo $_SESSION['name'];
        ?> na stronie
        <a href='./sesje.php'>Strona startowa</a>
    </body>
</html>
