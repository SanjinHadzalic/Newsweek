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
        <section class="row">
            <hr class="hrMain">
            <h2 id="us">U.S.</h2>
            <article class="column">
                <a href="maher.html" class="anchorArticle">
                <img src="images/maher.jpg" alt="Bill Maher">
                <h3>
                    Bill Maher Tears Into Restrictive New Anti-<br>Abortion Laws
                </h3>
            </a>
            </article>
            <article class="column">
                <a href="mcafee.html" class="anchorArticle">
                    <img src="images/mcafee.jpg" alt="John McAfee">
                    <h3>
                        John Mcafee Is Running for President and<br> Wants You to 'Wake the F*** Up'
                    </h3>
                </a>
            </article>
            <article class="column">
                <a href="mcafee.html" class="anchorArticle">
                    <img src="images/mcafee.jpg" alt="John McAfee">
                    <h3>
                        John Mcafee Is Running for President and<br> Wants You to 'Wake the F*** Up'
                    </h3>
                </a>
            </article>
        </section>
        <section class="row">
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