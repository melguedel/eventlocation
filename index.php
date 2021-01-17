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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <!-- Title -->
    <title>Crystal Lake Events Home</title>

</head>

<body>

    <!-- Navbar -->

    <?php include "includes/navbar.html"?>


    <!-- Header -->

    <header class="welcomeText">
        <h1>Crystal Lake Event Location</h1>
        <p>offers truly unique event facilities for everything from elegant celebrations to casual gatherings.</p>
    </header>
    

    <!-- Parallax Section -->

    <div class="parallax-container">
      <div class="parallax"><img src="images/wedders.jpg" alt="toast at a wedding"></div>
    </div>


    <!-- Section About -->

    <section class="about">

        <h2><?=$title?></h2>
        <p><?=$inhalt?></p>

    </section>
    

    <!-- Section Boxes -->

    <section class="boxes">

        <div id="pic" class="box concert">
            <img src="images/concert.jpg" alt="a crowd of people cheering at a concert">
        </div>

        <div id="pic" class="box wedding">
            <img src="images/festival.jpg" alt="decorated tables at a wedding">
        </div>

        <div id="pic" class="box festivals">
            <img src="images/foodfestival.jpg" alt="outdoor coffee shop">
        </div>

    </section>


    <!-- Section more -->

    <section class="more">

      <h2><?=$secondTitle?></h2>
      <p><?=$secondInhalt?></p>
        
    </section>
    

    <!-- Section Gallery -->
    
    <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/conference.jpg" alt="big hall room">
        <div class="caption center-align">
          <h3>Big Hall</h3>
          <h4 class="light grey-text text-lighten-3">Party with up to 400 people!</h5>
        </div>
      </li>
      <li>
        <img src="images/banquet.jpg" alt="decorated lunch tables">
        <div class="caption left-align">
          <h3>Team Meetings</h3>
          <h4 class="light grey-text text-lighten-3">Optional meals can be booked for meetings</h5>
        </div>
      </li>
      <li>
        <img src="images/weddingparty.jpg" alt="crowd cheering for wedding couple">
        <div class="caption right-align">
          <h3>Your Special Day</h3>
          <h4 class="light grey-text text-lighten-3">Rent our location for beautiful weddings</h5>
        </div>
      </li>
      <li>
        <img src="images/club.jpg" alt="clubbing">
        <div class="caption center-align">
          <h3>Concerts</h3>
          <h4 class="light grey-text text-lighten-3">See your favorite artists!</h5>
        </div>
      </li>
    </ul>
  </div>

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