<!DOCTYPE html>
<hmtl>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">        
        <title>Eurovision</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <header>
            <?php
                include 'header.php';
                ?>
        </header>
        <section role="main">
            <?php
                include 'connect.php';
                define('UPLPATH','images/');
                $post_id=$_GET['id'];
                $query2 = "SELECT * FROM newsweek WHERE id = '$post_id'";
                $res2 = mysqli_query($dbc,$query2);
                $row=mysqli_fetch_array($res2);
            ?>
            <div class="row">
            <h2 class="category"><?php                 
                echo "<span>".$row['kategorija']."</span>";
                ?></h2>
            <h1 class="title"><?php
                echo $row['naslov'];
                ?></h1>
            <p>AUTOR:</p>
            <p>OBJAVLJENO:<?php
                echo "<span>".$row['datum']."</span>";
                ?></p>
            </div>
            <section class="slika">
            <?php
                echo '<img src="'.UPLPATH.$row['slika'].'">';
            ?>
            </section>
            <section class="about">
                <p>
                    <?php
                    echo "<br><i>".$row['sazetak']."</i><br><br>";
                    ?>
                </p>
            </section>
            <section class="sadrzaj">
                <p>
                    <?php
                    echo $row['tekst'];
                    ?>
                </p>
            </section>
        </section>
        <footer>
            <?php
                include 'footer.php';
            ?>
        </footer>
    </body>
</hmtl>