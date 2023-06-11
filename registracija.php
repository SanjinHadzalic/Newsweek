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
            <!-- <?php
            // registracija je uspjesno prosla
            if($registriraniKorisnik==true){
                echo '<p>Korisnik je uspjesno registriran!</p>';
            } else {
                //registracija nije protekla puspjesno ili je korisnik prvi put dosao na stranicu
            }
            ?> -->
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
                    <!-- <?php echo '<br><span class="bojaPoruke">'.$msg.'</span>';?> -->
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
            <?php
                $ime=$_POST['ime'];
                $prezime=$_POST['prezime'];
                $username=$_POST['username'];
                $lozinka=$_POST['password'];
                $hashed_password=password_hash($lozinka, CRYPT_BLOWFISH);
                $razina=0;
                $registriraniKorisnik='';

                //provjera postoji li u bazi podataka vec korisnik s tim korisnickim imenom
                header('Content-Type: text/html; charset=utf-8');

                $servername="127.0.0.1:3307";
                $userServer="root";
                $password="";
                $basename="newsweek";

                $con = mysqli_connect($servername, $userServer, $password, $basename) or die('Error connecting to MYSQL server.'.mysqli_connect_error());
                mysqli_set_charset($con, "utf8");
                if($con){
                echo "Connected successfully";
                }

                $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?";
                $stmt = mysqli_stmt_init($con);
                if(mysqli_stmt_prepare($stmt,$sql)){
                    mysqli_stmt_bind_param($stmt, 's', $username);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                }
                if(mysqli_stmt_num_rows($stmt)>0){
                    echo "Korisnicko ime vec postoji!";
                } else {
                    // ako ne postoji korisnik s tim usernameom / registracija korisnika u bazi podataka pritom pazeci na SQL injection
                    $sql="INSERT INTO korisnik(ime, prezime, korisnicko_ime, lozinka, razina) VALUES (?,?,?,?,?)";
                    $stmt=mysqli_stmt_init($con);
                    if(mysqli_stmt_prepare($stmt,$sql)){
                        mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina);
                        mysqli_stmt_execute($stmt);
                        $registriraniKorisnik=true;
                    }
                    header("location:login.php");
                }
                mysqli_close($con);
            ?>
        </section>
        <script type="text/javascript">
            
            document.getElementById("slanje").onclick =function(event){

                var slanjeForme = true;

                // ime korisnika mora biti uneseno
                var poljeIme =document.getElementById("ime");
                var ime =document.getElementById("ime").value;
                if(ime.length == 0){
                    slanjeForme=false;
                    poljeIme.style.border="1px dashed red";
                    document.getElementById("porukaIme").innerHTML="<br>Unesite ime!<br>";
                } else {
                    poljeIme.style.border="1px solid green";
                    document.getElementById("porukaIme").innerHTML="";
                }

                //prezime korisnika mora biti uneseno
                var poljePrezime=document.getElementById("prezime");
                var prezime =document.getElementById("prezime").value;
                if(prezime.length==0){
                    slanjeForme=false;
                    poljePrezime.style.border="1px dashed red";
                    document.getElementById("porukaPrezime").innerHTML="<br>Unesite prezime!<br>";
                } else {
                    poljePrezime.style.border="1px solid green";
                    document.getElementById("porukaPrezime").innerHTML="";
                }

                //username mora biti unesen
                var poljeUsername =document.getElementById("username");
                var username =document.getElementById("username").value;
                if(username.length==0){
                    slanjeForme=false;
                    poljeUsername.style.border="1p dashed red";
                    document.getElementById("porukaUsername").innerHTML="<br>Unesite korisnicko ime!<br>";
                } else {
                    poljeUsername.style.border="1px solid green";
                    document.getElementById("porukaUsername").innerHTML="";
                }

                //provjera podudaranja lozinki
                var poljePass=document.getElementById("password");
                var pass =document.getElementById("password").value;
                var poljePassAgain=document.getElementById("passwordAgain");
                var passAgain =document.getElementById("passwordAgain").value;
                if(pass.length==0 || passAgain.length==0 || pass!=passAgain){
                    slanjeForme=false;
                    poljePass.style.border="1px dashed red";
                    poljePassAgain.style.border="1px dashed red";
                    document.getElementById("porukaPass").innerHTML="<br>Lozinke nisu iste!<br>";
                    document.getElementById("porukaPassAgain").innerHTML="<br>Lozinke nisu iste!<br>";
                } else{
                    poljePass.style.border="1px solid green";
                    poljePassAgain.style.border="1px solid green";
                    document.getElementById("porukaPass").innerHTML="";
                    document.getElementById("porukaPassAgain").innerHTML="";
                }

                if(slanjeForme!=true){
                    event.preventDefault();
                }
            }
        </script>
            <footer>
                <?php
                    include('footer.php');
                ?>
            </footer>
    </body>
</hmtl>