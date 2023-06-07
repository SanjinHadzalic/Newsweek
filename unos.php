<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Unos</title>
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
                        <li><a href="unos.php">Unos</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <section id="formSection">
           <form enctype="multipart/form-data" action="skripta.php" method="post">

                <label for="naslov">Naslov vijesti:</label><br>
                <input type="text" name="naslov"><br><br>

                <label for="kratki">Kratki sadržaj vijesti (do 50 znakova):</label><br>
                <textarea rows="4" cols="50" name="kratki"></textarea>><br><br>

                <label for="sadrzaj">Sadržaj vijesti:</label><br>
                <textarea rows="4" cols="50" name="sadrzaj"></textarea>><br><br>

                <label for="newsCategory">Kategorija:</label><br>
                <select name="newsCategory" size="1">
                   <option value="us">U.S.</option>
                   <option value="world">World</option> 
                   <option value="foor">Food</option> 
                   <option value="sport">Sport</option> 
                   <option value="travel">Travel</option> 
                </select><br><br>

                <label for="slika">Slika:</label><br>
                <input type="file" accept="image/jpg,image/gif" name="slika"/><br><br>

                <label for="check">Spremiti u arhivu:</label><br>
                <input type="checkbox" name="da">
                <label for="da">da</label><br><br>

                <input type="submit" value="Pošalji" name="teset">
           </form>
        </section>
        <footer>
            <p>
                Sanjin Hadžalić, shadzalic@tvz.hr, 2023.
            </p>
            <hr class="hrFooter">
        </footer>
    </body>
</hmtl>