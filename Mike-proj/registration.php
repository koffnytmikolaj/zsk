<?php
    require("elements/head.php");
?>
        <title>EngToTech - Rejestracja</title>
    </head>
    <body>
        <?php
            require("elements/header_1.php");
            require("elements/header_registration.php");
            require("elements/header_2.php");
        ?>
        <div class="container-fluid bg-light">
            <div class="row">
                <div class="col-12 col-sm-10 col-md-8 col-lg-6 offset-sm-1 offset-md-2 offset-lg-3">
                    <form method="post">
                        <fieldset id="login_field">
                            <div id="fieldset_header"><h3>Zarejestruj się</h3></div>
                            <p>Login</p>
                            <input type="text" name="login" class="login_input" />
                            <p>Hasło</p>
                            <input type="password" name="password" class="login_input" />
                            <p>Potwierdź hasło</p>
                            <input type="password" name="confirm_password" class="login_input" />
                            <p>Imię</p>
                            <input type="text" name="name" class="login_input" />
                            <p>Nazwisko</p>
                            <input type="text" name="surname" class="login_input" />
                            <p>Adres E-mail</p>
                            <input type="text" name="email" class="login_input" />
                            <br>
                            <input type="submit" id="log_in" value="Zarejestruj" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
<?php
    require("elements/scripts.php");
?>
        