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
            <div class="upperHeader">
                <p>Sat, May 18, 2019</p>
                <h1>Newsweek</h1>                
            </div>
            <div class="bottomHeader">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#us">U.S.</a></li>
                        <li><a href="#world">World</a></li>
                        <li><a href="">Administracija</a></li>
                        <li><a href="unos.html">Unos</a></li>
                    </ul>
                </nav>
            </div>
        </header>
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
                    $slika=$_POST['slika'];
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
                </p>
            </section>
        </section>
        <footer>
            <p>
                Sanjin Hadžalić, shadzalic@tvz.hr, 2023.
            </p>
            <hr class="hrFooter">
        </footer>
    </body>
</hmtl>
