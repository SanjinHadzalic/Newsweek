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
                    // $pass = password_hash($_POST['password'], CRYPT_BLOWFISH);
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

                    // $stmt->bind_result($username, $pass);
                    // $stmt->store_result();
                                        
                    // if($stmt->num_rows()==1){
                    //     if($stmt->fetch()){
                    //             echo 'postoji';
                    //     }
                    // } else{
                    //     echo 'nema ga';
                    // }
                    // $sql = "SELECT korisnicko_ime, lozinka FROM korisnik WHERE korisnicko_ime=? AND lozinka=? LIMIT 1";
                    // $stmt = mysqli_stmt_init($con);
                    
                    // if(mysqli_stmt_prepare($stmt,$sql)){
                    //     mysqli_stmt_bind_param($stmt,'ss',$username,$hashed_password);
                    //     mysqli_stmt_execute($stmt);
                    //     mysqli_stmt_store_result($stmt);
                    //     echo $username;
                    //     mysqli_stmt_bind_result($stmt,$username,$hashed_password);
                    //     mysqli_stmt_fetch($stmt);
                    //     echo 'asdasd';
                    //     if(mysqli_stmt_num_rows($stmt)>0){
                    //         echo 'uspjesan login<br><br>';
                    //     } else {
                    //         echo'';
                    //     }
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