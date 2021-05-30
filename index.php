<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Anaphil Thermique</title>
</head>
<body>

                <!-- Header -->

            <?php include 'header.php' ?>

                <!-- Contenue -->

    <main>

        <div class="container-first">
            <div class="intro">
                <div class="fond-intro">
                    <img src="media/fond.jpg" alt="">
                    <div class="fond-gris"></div>
                </div>

                <div class="desc">
                    <p>Depuis 2011, la société <b>Anaphil Thermique</b></p>
                    <p>basée à Chevannes dans le 91 assure la maintenance</p>
                    <p>de votre chauffage sur toute l'Ile de France</p>
                </div>
            </div>
        </div>

        <div class="container-main">
            <h1>Station technique agréée</h1>
            <hr>
            <div class="partenaires">
                <a href="https://www.viessmann.fr/">
                <div class="viessman">
                    <img src="media/viessman.jpeg" alt="">
                </div>
                </a>
                <a href="https://www.hoval.fr/">
                <div class="hoval">
                    <img src="media/hoval.png" alt="">
                </div>
                </a>
                <a href="https://elco.fr/">
                <div class="elco">
                    <img src="media/elco.jpeg" alt="">
                </div>
                </a>
                <a href="https://www.acv.com/france/">
                <div class="acv">
                    <img src="media/acv.png" alt="">
                </div>
                </a>
            </div>
        </div>

        <?php include 'pastille.php' ?>

    </main>

                <!-- Footer -->     

    <?php include 'footer.php' ?>
    
    <script src='panier-fonct.js'></script>


</body>
</html>