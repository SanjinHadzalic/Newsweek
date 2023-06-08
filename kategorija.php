<!DOCTYPE html>
<hmtl>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>kategorija</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <header>
            <?php
            include('header.php');
            ?>
        </header>
        <section class="kategorijaSection">
            <hr class="hrMain">
            <?php
            include 'connect.php';
            define('UPLPATH', 'images/');
            $kategorija=$_GET['kategorija'];
            $query = "SELECT * FROM newsweek WHERE kategorija=$kategorija AND arhiva=1" ;
            $result = mysqli_query($dbc, $query);
            $i = 0;
            echo "<h2 id='us'>".$kategorija."</h2>";
            while ($row = mysqli_fetch_array($result)) {
                echo '<article>';
                echo '<div class="column">';
                echo '<div class="usaSectionImage">';
                echo '<img src="' . UPLPATH . $row['slika'] . '">';
                echo '</div>';
                echo '<div class="media_body">';
                echo '<h3 class="title">';
                echo '<a href="clanak.php?id=' . $row['id'] . '" class="anchorArticle">';
                echo $row['naslov'];
                echo '</a></h4>';
                echo '</div></div>';
                echo '</article>';
            }
            ?>
            <footer>
                <?php
                include('footer.php');
                ?>
            </footer>
    </body>
</hmtl>