<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Administracija</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <?php
                include('header.php');
                ?>
        </header>
        <section>
            <?php
                include 'connect.php';
                define('UPLPATH','images/');
                $query= "SELECT * FROM newsweek;";
                $result= mysqli_query($dbc, $query);
                while($row = mysqli_fetch_array($result)){

                    echo '<section class="columnAdmin"><form enctype="multipart/form-data" action="" method="POST">
                            <div class="form-item">
                                <label for="title">Naslov vijesti:</label>
                            <div class="form-field">
                                <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'">
                            </div>
                            </div>
                            <div class="form-item">
                                <label for="about">Kratki sadrzaj vijesti (do 50 znakova):</label>
                            <div class="form-field">
                                <textarea name="about" id="" cols="30" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea>
                            </div>
                            </div>
                            <div class="form-item">
                                <label for="content">Sadrzaj vijesti:</label>
                            <div class="form-field">
                                <textarea name="content" id="" cols="30" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea>
                            </div>
                            </div>
                            <div class="form-item">
                                <label for="slika">Slika:</label>
                            <div class="form-field">
                            <input type="file" class="input-text" id="slika" value="'.$row['slika'].'" name="slika"/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px> 
                            // pokraj gumba za odabir slike pojavljuje se umanjeni prikaz postojeće slike
                            </div>
                            </div>

                            <div class="form-item">
                                <label for="category">Kategorija vijesti:</label>
                            <div class="form-field">
                                <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
                                    <option value="us">U.S.</option>
                                    <option value="world">World</option>
                                </select>
                            </div>
                            </div>
                            <div class="form-item">
                                <label>Spremiti u arhivu:
                            <div class="form-field">';
                                if($row['arhiva']==0){
                                    echo '<input type="checkbox" name="archive" id="archive"/> Arhiviraj?';
                                } else {
                                    echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
                                }
                                echo '</div>
                                </label>
                                </div>
                                </div>
                                <div class="form-item">
                                    <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
                                    <button type="reset" value="reset">Ponisti</button>
                                    <button type="submit" name="update" value="Prihvati">Izmjeni</button>
                                    <button type="submit" value="delete" value="Izbrisi">Izbrisi</button>
                                </div>
                                </form></section>';
                }
            ?>
        </section>
        <footer>
            <?php
                include('footer.php');
            ?>
        </footer>
    </body>
</hmtl>