<?php
session_start();
$_SESSION['status'] = "You are logged in!"
// include_once('includes/config.inc.php');
?>

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
    <!-- <link rel="manifest" href="/manifest.json"> -->
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <!-- Materialize CSS Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
    <!-- Other Stylesheets -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/dashboard.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@800&family=Poppins&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    
    <!-- Title -->
    <title>Crystal Lake Events DASHBOARD</title>

</head>

<body>

    <!-- Navbar -->

    <?php include "includes/navbar.html"?>

<!-- Vertical Side Navigation -->

<h3>Welcome back!</h3>

    <div class="vertical-menu">
        <a href="#">Edit Landing Page</a>
        <a href="#">Edit Guestbook</a>
        <a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Logout</a>
    </div>

<!-- CK Editor  -->
         
<?php

// In ein Textfile schreiben
if ( isset($_POST['save']) ) {
    writeContent("content.txt");
}

// Funktion um in Textfile zu schreiben
function schreibeContent($contentFile) {
    $handler = fopen($contentFile, "w");
    // Was in Textarea geschrieben wird ausgeben
    fwrite($handler, $_POST['inhalt']);
    // Datei schliessen
    fclose($handler);
}

// Funktion um Textfile zu lesen
function leseContent($contentFile) {
    // In Array einlesen, jede Textzeile durchiterieren
    $arr = file($contentFile);
    $content= "";
    foreach ($arr as $aus) {
        $content .= $aus;
    }
    return $content;
}

// Text der in Content File reingeschrieben wurde wieder anzeigen
$output = leseContent("content.txt");

?>

<!-- Editor und Speichern Button -->

<form action="dashboard.php" method="POST">
    <textarea name="inhalt" id="inhalt"><?=$output?></textarea>
    <button type="submit" class="subBtn" name="save">Save Text</button>
</form>

<?php

// Wurde der Submit Button gedrückt?
if ( isset($_POST['save']) ) {
    // wenn ja:
    schreibeContent("content.txt");
    echo "<div class=\"new\">";
    echo "Changes saved!";
    echo "</div>\n";
}


?>

    <!-- Footer -->

    <?php include "includes/footer.html"?>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- GSAP -->


    <!-- Materialize JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- JS Scripts -->
    <script src="js/code.js"></script>

    <script>

        // CKEditor einfügen
        CKEDITOR.replace('inhalt', {
            customConfig:"/ckeditor/custom_config.js"
        });

    </script>

</body>
</html>