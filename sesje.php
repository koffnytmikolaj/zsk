<?php
    session_start();
    $_SESSION['name'] = 'Janusz';
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
        echo session_id();
        ?> na stronie
        <a href='./sesje2.php'>Strona 2</a>
    </body>
</html>
