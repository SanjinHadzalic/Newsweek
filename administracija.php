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
                session_start();
                include 'connect.php';
                define('UPLPATH','images/');
                if($_SESSION['username']=='admin' && $_SESSION['razina']==1){
                    // forme za administraciju
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
                                        <button type="submit" name="delete" value="Izbrisi">Izbrisi</button>
                                    </div>
                                    </form></section>';
                    }
                    // za brisanje podataka iz tablica
                    if(isset($_POST['delete'])){
                        $id=$_POST['id'];
                        $query="DELETE FROM newsweek WHERE id=$id";
                        $result=mysqli_query($dbc,$query);
                    }
    
                    // za azuriranje podataka unutar tablice
                    if(isset($_POST['update'])){
                        $picture=$_FILES['slika']['name'];
                        $title=$_POST['title'];
                        $about=$_POST['about'];
                        $content=$_POST['content'];
                        $category=$_POST['category'];
                        if(isset($_POST['archive'])){
                            $archive=1;
                        }else{
                            $archive=0;
                        }
                        $target_dir='iamges/'.$picture;
                        move_uploaded_file($_FILES['slika']['name'], $target_dir);
    
                        $id=$_POST['id'];
                        try{
                            $query="UPDATE newsweek SET naslov='$title', sazetak='$about', tekst='$content', slika='$picture', kategorija='$category', arhiva='$archive' WHERE id=$id";
                            $result=mysqli_query($dbc, $query);
                        } catch(mysqli_sql_exception $ex){
                            var_dump($ex);
                            exit;
                        }
                    }
                } else {
                    echo 'Nemate dovoljne administratorske ovlast!<br><a href="login.php">Login</a>';
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