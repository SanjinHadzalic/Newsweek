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
            <?php
            include('header.php');
            ?>
        </header>
        <!-- <section id="formSection"> -->
            <form enctype="multipart/form-data" action="insert.php" method="post">
            <form>

                <label for="naslov">Naslov vijesti:</label><br>
                <input type="text" name="naslov" id="naslov"><br><br>
                <span id="porukaTitle" class="bojaPoruke">222</span><br>

                <label for="kratki">Kratki sadržaj vijesti (do 50 znakova):</label><br>
                <textarea rows="4" cols="50" name="kratki" id="kratki"></textarea>><br><br>
                <span id="porukaAbout"></span>

                <label for="sadrzaj">Sadržaj vijesti:</label><br>
                <textarea rows="4" cols="50" name="sadrzaj" id="sadrzaj"></textarea>><br><br>
                <span id="porukaContent"></span>

                <label for="newsCategory">Kategorija vijesti:</label><br>
                <select name="newsCategory" size="1" id="newsCategory">
                    <option value="" disabled selected>Odabir kategorije</option>
                    <option value="us">U.S.</option>
                    <option value="world">World</option>
                    <option value="foor">Food</option>
                    <option value="sport">Sport</option>
                    <option value="travel">Travel</option>
                </select><br><br>
                <span id="porukaKategorija"></span>
                
                <label for="slika">Slika:</label><br>
                <input type="file" accept="image/jpg,image/gif" id="slika" name="slika" /><br><br>
                <span id="porukaSlika"></span>
                
                <label for="arhiva">Spremiti u arhivu:</label><br>
                <input type="checkbox" name="arhiva" id="arhiva">
                <label for="daArhiva">da</label><br><br>
                
                <button type="submit" id="slanje">Posalji</button>
            </form>
        </section>

            <script type="text/javascript">

                // provjera forme prije slanja
                document.getElementById("slanje").onclick = function (event) {

                    var slanjeForme = true;

                    // Naslov vijesti (5 - 30 znakova)
                    var poljeTitle = document.getElementById("naslov");
                    var title = document.getElementById("naslov").value;
                    if (title.length < 5 || title.length > 30) {
                        slanjeForme = false;
                        poljeTitle.style.border = "1px dashed red";
                        document.getElementById("porukaTitle").innerHTML = "Naslov vijesti mora imati izmedju 5 i 30 znakova!<br>";
                    } else {
                        poljeTitle.style.border = "1px solid green";
                        document.getElementById("porukaTitle").innerHTML = "";
                    }

                    // Kratki sadrzaj (10-100 znakova)
                    var poljeAbout = document.getElementById("kratki");
                    var about = document.getElementById("kratki").value;
                    if (about.length < 10 || about.length > 100) {
                        slanjeForme = false;
                        poljeAbout.style.border = "1px dashed red";
                        document.getElementById("porukaAbout").innerHTML = "Kratki sadrzaj mora imati izmedju 10 i 100 znakova!<br>";
                    } else {
                        poljeAbout.style.border = "1px solid green";
                        document.getElementById("poruka")
                    }

                    // Sadrzaj mora biti unesen
                    var poljeContent = document.getElementById("sadrzaj");
                    var content = document.getElementById("sadrzaj").value;
                    if (content.length == 0) {
                        slanjeForme = false;
                        poljeContent.style.border = "1px dashed red";
                        document.getElementById("porukaContent").innerHTML = "Sadrzaj mora biti unesen!<br>";
                    } else {
                        poljeContent.style.border = "1px solid green";
                        document.getElementById("porukaContent").innerHTML = "";
                    }

                    // Slika mora biti unesena
                    var poljeSlika = document.getElementById("slika");
                    var slika = document.getElementById("slika").value;
                    if (slika.length == 0) {
                        slanjeForme = false;
                        poljeSlika.style.border = "1px dashed red";
                        document.getElementById("porukaSlika").innerHTML = "Slika mora biti unesena!<br>";
                    } else {
                        poljeSlika.stye.border = "1px solid green";
                        document.getElementById("porukaSlika").innerHTML = "";
                    }

                    // Kategorija mora biti odabrana
                    var poljeCategory = document.getElementById("kategorija");
                    if (document.getElementById("kategorija").selectedIndex == 0) {
                        slanjeForme = false;
                        poljeCategory.style.border = "1px dashed red";
                        document.getElementById("porukaKategorija").innerHTML = "Kategorija mora biti odabrana!<br>";
                    } else {
                        poljeCategory.style.border = "1px solid green";
                        document.getElementById("porukaKategorija").innerHTML = "";
                    }

                    if (slanjeForme != true) {
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