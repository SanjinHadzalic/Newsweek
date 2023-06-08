<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Naslovna strana</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <?php
                include('header.php');
                ?>
        </header>
        <section class="usaSection">
        <hr class="hrMain">
        <h2 id="us">U.S.</h2>
            <?php
                include 'connect.php';
                define('UPLPATH','images/');
                $query="SELECT * FROM newsweek WHERE arhiva=0 AND kategorija='us' LIMIT 3";
                $result=mysqli_query($dbc,$query);
                    $i=0;
                    while($row=mysqli_fetch_array($result)){
                        echo '<article>';
                            echo '<div class="column">';
                            echo '<div class="usaSectionImage">';
                            echo '<img src="' . UPLPATH . $row['slika'] . '">';
                            echo '</div>';
                            echo '<div class="media_body">';
                            echo '<h3 class="title">'; 
                            echo '<a href="clanak.php?id='.$row['id'].'" class="anchorArticle">'; 
                            echo $row['naslov']; 
                            echo '</a></h4>'; 
                            echo '</div></div>'; 
                            echo '</article>';                    }
            ?>
        <section class="worldSection">
        <?php
            include 'connect.php';
            define('UPLPATH','images/');
            $query="SELECT * FROM newsweek WHERE arhiva=0 AND kategorija='world' LIMIT 3";
            $result=mysqli_query($dbc,$query);
                $i=0;
                while($row=mysqli_fetch_array($result)){
                    echo '<article>';
                        echo '<div class="column">';
                        echo '<div class="worldSectionImage">';
                        echo '<img src="' . UPLPATH . $row['slika'] . '">';
                        echo '</div>';
                        echo '<div class="media_body">';
                        echo '<h3 class="title">'; 
                        echo '<a href="clanak.php?id='.$row['id'].'" class="anchorArticle">'; 
                        echo $row['naslov']; 
                        echo '</a></h4>'; 
                        echo '</div></div>'; 
                        echo '</article>';                    }
        ?>
            <hr class="hrMain">
            <h2 id="world">World</h2>
            <article class="column">
                <a href="eurovision.html" class="anchorArticle">
                    <img src="images/eurovision.jpg" alt="eurovision">
                    <h3>
                        Eurovision 2019: Israelis and Palestinians Fight to Be Heard
                    </h3>
                </a>
            </article>
            <article class="column">
                <a href="navy.html" class="anchorArticle">
                    <img src="images/navy.jpg" alt="navy">
                    <h3>
                        Could U.S. Defeat Irans's Navy? This Exercise Shows War Would Not Be Easy
                    </h3>
                </a>
            </article>
            <article class="column">
                <a href="navy.html" class="anchorArticle">
                    <img src="images/navy.jpg" alt="navy">
                    <h3>
                        Could U.S. Defeat Irans's Navy? This Exercise Shows War Would Not Be Easy
                    </h3>
                </a>
            </article>
        </section>
        <footer>
            <?php
                include('footer.php');
            ?>
        </footer>
    </body>
</hmtl>