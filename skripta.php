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
            <h2>
                <?php
                    echo ""; 
                    ?>
            </h2>
                <?php
                    echo $_POST['naslov']."<br>";
                    echo $_POST['kratki']."<br>";
                    echo $_POST['sadrzaj']."<br>";
                    if(isset($_POST['da'])){
                        echo "Checkbox je oznacen!";
                    }
                ?>
        </section>
        <footer>
            <p>
                Sanjin Hadžalić, shadzalic@tvz.hr, 2023.
            </p>
            <hr class="hrFooter">
        </footer>
    </body>
</hmtl>
