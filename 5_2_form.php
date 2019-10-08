<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
            if (!empty ($_GET['country'] ) ){
                if (strlen ($_GET['country']) < 10){
                    echo "ok";
                }else{
                    echo "Błąd danych!<br>";
                    require_once('.5_2_1_form.php')
                }
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
