<!DOCTYPE html>
<hmtl>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login forma</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <header>
            <?php
            ?>
        </header>
        <section class="loginSection">
            <?php
            // registracija je uspjesno prosla
            if($registriraniKorisnik==true){
                echo '<p>Korisnik je uspjesno registriran!</p>';
            } else {
                //registracija nije protekla puspjesno ili je korisnik prvi put dosao na stranicu
            }
            ?>
            <section role="main">
            <form enctype="multipart/form-data" action="" method="post">
                <div class="form-item">
                    <span id="porukaIme"class="bojaPoruke"></span>
                    <label for="ime">Ime:</label>
                    <div class="form-field">
                        <input type="text" name="ime" id="ime"class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPrezime"class="bojaPoruke"></span>
                    <label for="prezime">Prezime:</label>
                    <div class="form-field">
                        <input type="text" name="prezime" id="prezime"class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaUsername"class="bojaPoruke"></span>

                    <label for="username">Username:</label>
                    <!-- ispis poruke nakon provjere korisnickog imena u bazi -->
                    <?php echo '<br><span class="bojaPoruke">'.$msg.'</span>';?>
                    <div class="form-field">
                        <input type="text" name="username" id="username"class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPass"class="bojaPoruke"></span>

                    <label for="pass">Password:</label>
                    <div class="form-field">
                        <input type="password" name="password" id="password"class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <span id="porukaPassAgain"class="bojaPoruke"></span>

                    <label for="pass">Password again:</label>
                    <div class="form-field">
                        <input type="password" name="passwordAgain" id="passwordAgain"class="form-field-textual">
                    </div>
                </div>
                <div class="form-item">
                    <button type="submit" value="Prijava"id="slanje">Prijava</button>
                </div>
            </form>
        </section>
            <footer>
                <?php
                    include('footer.php');
                ?>
            </footer>
    </body>
</hmtl>