<?php include "includes/dashboard.inc.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crystal Lake Events. Concerts, Festivals, Weddings and other Events. Book now!">

    <!-- Favicons -->

    <link rel="apple-touch-icon" sizes="57x57" href="images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicons//android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicons/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Materialize CSS Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contact.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <!-- Title -->
    <title>Crystal Lake Events</title>

</head>

<body>

    <!-- Navbar -->

    <?php include "includes/navbar.html"?>

    <!-- Kontaktdaten und Map Section -->

    <section class="contact">

        <!-- Section Contact (mit Editor bearbeitbar) -->

            <section class="map">

                <h4><?=$thirdTitle?></h4>
                <p><?=$thirdInhalt?></p>
            
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2628.944028640874!2d-106.91516847707504!3d37.34646445330673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x873dde021b2c0659%3A0xfba98dedafe884ba!2sValhalla%20Pl%2C%20Colorado%2081147%2C%20USA!5e0!3m2!1sde!2sch!4v1607764003886!5m2!1sde!2sch" title="google map" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </section>

            <!-- Section Anschrift -->

            <section class="address">

                <div class="anschrift">
                    <h5>Crystal Lake Event Location</h6>
                    <p>Crystal Lake Events</p>
                    <p>Valhalla Pl, Colorado 81147, USA</p>
                    <p>crystal-lake@hotmail.com</p>
                    <p>+19702645874</p>
                </div>

                <!-- Newsletter Form -->

                <!-- <form class="newsletter" action="" method="POST">

                    <h5>Sign up for our newsletter!</h6>

                        <label for="mail">Enter E-Mail<input type="text" name="mail" value=""></label>
                        
                        <input type="submit" class="subBtn" value="Sign me up" name="send">

                </form> -->

            </section>

    </section>

    <!-- Footer -->

    <?php include "includes/footer.html"?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS Scripts -->
    <script src="js/code.js"></script>

</body>
</html>