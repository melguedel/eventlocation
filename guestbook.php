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
    <link rel="stylesheet" href="css/guestbook.css">

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

    <!-- Guestbook Form -->

    <?php

    // DB Verbindung
    include_once('includes/config.inc.php');


    // Button wurde gedrückt

    if ( isset($_POST['comment']) ) {

        // Variablen definieren und Tags aus Input entfernen
        $username = strip_tags($_POST['username'], FILTER_SANITIZE_STRING);
        $mail = strip_tags($_POST['mail'], FILTER_SANITIZE_EMAIL);
        $message = strip_tags($_POST['message'], FILTER_SANITIZE_STRING);

        // Email Variable zusätzlich mit Filter validieren
        $validMail = filter_var($mail, FILTER_VALIDATE_EMAIL);

        // Ist Input in Username, Email und Message? 
        if ( isset($username) && isset($validMail) && isset($message) ) {
            // zu DB hinzufügen
            $sql = "INSERT INTO `guestbook` (`username`, `email`, `message`) VALUES ('$username', '$mail', '$message')";
            if (mysqli_query($conn, $sql)) {
                // Kommentar erfolgreich gespeichert!
                echo "<div class=\"new\">";
                echo "Saved your comment!";
                echo "</div>\n";
            } else {
            echo "<div class=\"redError\">";
            echo "You did not fill in all input fields.";
            echo "</div>\n";
        } 
    } 
} else {
            // Falls noch nichts eingegeben wurde, alles auf leer setzen
            $username = "";
            $mail = "";
            $message = "";
        }

    ?>

    <form action="guestbook.php" class="guestform" method="POST">

        <h2>Share your thoughts!</h2>
        <p class="regInfo">about concerts, festivals and more.</p>

        <label for="username">Username<input type="text" name="username" value="<?=$username?>"></label>

        <label for="email">Email<input type="text" name="mail" value="<?=$mail?>"></label>

        <div class="row">
            <form class="col s12 guestform">
            <div class="row">
                <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea" name="message"><?=$message?></textarea>
                <label for="textarea1">Textarea</label>
                </div>
            </div>

            <input type="submit" name="comment" class="subBtn" value="Share your comment"></input>
            </form>
        </div>

    </form>


    <?php

        // Query erstellen und von DB holen
        $rs = "SELECT `username`,`message` FROM `guestbook`";
        $rsquery = mysqli_query($conn, $rs);
        
        // checken ob mehr als 0 Einträge in DB sind
        if (mysqli_num_rows($rsquery) > 0) {
            // Daten ausgeben
            while($row = mysqli_fetch_assoc($rsquery)) {
                echo "<div class=\"userComment\">";
                echo "<b>Username:</b> ".$row['username']."<br>"." <b>Message:</b> ".$row['message']."<br>";
                echo "</div>\n";
                // } else {
            //     echo "<div class=\"redError\">";
            //     echo "No posts were found.";
            //     echo "</div>\n";
            }
        };


    // DB schliessen
    mysqli_close($conn);       


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

</body>
</html>