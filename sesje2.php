<?php
    session_start();
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
        <a href='./sesje3.php'>Strona 3</a>
    </body>
</html>
