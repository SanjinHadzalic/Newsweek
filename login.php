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
            <form action="" method="post">
                <h2>LOGIN</h2><br>
                <label>Korisnicko ime:</label>
                <input type="text" name="username" placeholder="username"><br><br>
                <label>Password:</label>
                <input type="password" name="password"placeholder="password"><br><br>

                <button type="submit" name="submit">Login</button>
            </form>
            <?php
                header('Content-Type: text/html; charset=utf-8');

                $servername="127.0.0.1:3307";
                $userServer="root";
                $password="";
                $basename="newsweek";

                $con = mysqli_connect($servername, $userServer, $password, $basename) or die('Error connecting to MYSQL server.'.mysqli_connect_error());
                mysqli_set_charset($con, "utf8");
                if($con){
                // echo "Connected successfully";
                }
                //login logic
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $pass = $_POST['password'];
                    $hashed_password=password_hash($pass, CRYPT_BLOWFISH);
                    
                    $stmt = $con->prepare("SELECT lozinka FROM korisnik WHERE korisnicko_ime=? LIMIT 1");
                    $stmt->bind_param('s', $username);
                    $stmt->execute();

                    $isPassOK=false;
                    $stmt->bind_result($hashFromDB);
                    if($stmt->fetch()==true){
                        $isPassOK=password_verify($pass,$hashFromDB);
                        header("location:index.php");
                    } else {
                        echo 'Korisnik ne postoji!<br><a href="registracija.php">Rgistriraj se</a><br>';
                    }
                }
                $con->close();
            ?>
        </section>
            <footer>
                <?php
                    include('footer.php');
                ?>
            </footer>
    </body>
</hmtl>