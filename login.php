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

                <p><a href="">register now</a></p>
            </form>
            <?php
                header('Content-Type: text/html; charset=utf-8');

                $servername="127.0.0.1:3307";
                $username="root";
                $password="";
                $basename="newsweek";

                $con = mysqli_connect($servername, $username, $password, $basename) or die('Error connecting to MYSQL server.'.mysqli_connect_error());
                mysqli_set_charset($con, "utf8");
                if($con){
                // echo "Connected successfully";
                }
                //login logic
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $password = $_POST['password'];

                    $query = "SELECT * FROM korisnik WHERE korisnicko_ime='$username' AND lozinka='$password'";
                    $result = mysqli_query($con,$query);

                    if(mysqli_num_rows($result)==1){
                        $_SESSION['username'] = $username;
                        header('location:index.php');
                    } else {
                        echo 'Korisnik NE postoji!';
                    }

                }
                // $sql="INSERT INTO korisnik (ime, prezime, korisnicko_ime, lozinka, razina) VALUES('Jane', 'Doe', 'jadoe', '54321', 0);";

                // if ($con->query($sql) === TRUE) {
                //     echo "New record created successfully";
                // } else {
                //     echo "Error: " . $sql . "<br>" . $con->error;
                // }
                
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