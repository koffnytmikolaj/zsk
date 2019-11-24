<?php
    require("elements/head.php");
?>
        <title>EngToTech - Logowanie</title>
    </head>
    <body>
        <?php
            require("elements/header_1.php");
            require("elements/header_login.php");
            require("elements/header_2.php");
        ?>
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-8 offset-sm-1 offset-md-2 ">
                    <form method="post">
                        <fieldset id="login_field">
                            <div id="fieldset_header"><h3>Zaloguj się</h3></div>
                            <p>Login</p>
                            <input type="text" name="login" class="login_input" />
                            <p>Hasło</p>
                            <input type="password" name="password" class="login_input" />
                            <br><a href="#">Nie pamiętasz hasła?</a><br>
                            <input type="submit" id="log_in" value="Zaloguj" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
<?php
    require("elements/scripts.php");
?>
        