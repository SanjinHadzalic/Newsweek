<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Skripta.php</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <?php
                include('header.php');
            ?>
        </header>
        <?php
            include 'connect.php';
        ?>
        <section id="noviClanak">
            <div class="row">
                <p class="unosKategorija">
                    <?php
                        echo $_POST['newsCategory']."<br><br>"; 
                    ?>
                </p>
                <h1 class="formClanakNaslov">
                    <?php
                    echo $_POST['naslov']."<br><br>";
                    ?>
                </h1>
                <p>
                    AUTOR:
                </p>
                <p>
                    OBJAVLJENO:<br><br>
                </p>
            </div>
            <section class="slika">
                <?php
                    $slika=$_FILES['slika']['name'];
                    echo "<img src='images/$slika'"."<br><br>";
                ?>
            </section>
            <section class="about">
                <p>
                    <?php
                    echo $_POST['kratki']."<br><br>";
                    ?>
                </p>
            </section>
            <section>
                <p>
                    <?php
                        echo $_POST['sadrzaj']."<br><br>";
                    ?>
                    <?php
                        if(isset($_POST['arhiva'])){
                            include 'insert.php';
                        }
                    ?>
                </p>
            </section>
        </section>
        <footer>
            <?php
                include('footer.php');
            ?>
        </footer>
    </body>
</hmtl>
