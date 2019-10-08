<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if (!empty ($_GET['country'] ) ){
                echo "ok";
            }else{
                ?>
        <form method = "get">
            <input type = "text" name = "country" placeholder = "Podaj kraj" >
            <input type = "submit" name = "" value = "" >
        </form>
        <?php
            }
        ?>
        
    </body>
</html>
