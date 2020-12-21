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

        // mit DB verbinden
            $link = mysqli_connect('localhost', 'root', 'root', 'eventlocation');

            // check connection
            if (!$link) {
                echo 'Connection error: '.mysqli_connect_error();
            }

            // Query für Kommentare
            $sql = 'SELECT `id`, `username`, `message` FROM `guestbook`';

            // Query erstellen und Resultate aus DB holen
            $result = mysqli_query($link, $sql);

            // fetch die resultate als array

            $comments = mysqli_fetch_all($result, MYSQLI_ASSOC);

            // free result from memory

            mysqli_free_result($result);



      // Button wurde gedrückt

    if ( isset($_POST['comment']) ) {
        $username = strip_tags($_POST['username']);
        $mail = strip_tags($_POST['mail']);
        $message = strip_tags($_POST['message']);

        if ( $username && $mail && $message ) {
            // zu DB hinzufügen
            $resultat = mysqli_query("INSERT INTO `guestbook` VALUES ('$username', '$mail', '$message')", $link);
        } else {
            echo "<div class=\"redError\">";
            echo "You did not fill in all input fields.";
            echo "</div>\n";
        }
    };

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
                <textarea id="textarea1" class="materialize-textarea" name="message" value="<?=$message?>"></textarea>
                <label for="textarea1">Textarea</label>
                </div>
            </div>

            <input type="submit" name="comment" class="subBtn" value="Share your comment"></input>
            </form>
        </div>

    </form>


    <?php

    
        $rs = mysqli_query("SELECT `id`, `username`, `message` FROM `guestbook`", $link);
            $numrows = mysqli_num_rows($rs);

            if ( $numrows > 0 ) {
                while ( $row = mysqli_fetch_assoc($rs) ) {
                    $id = $row['id'];
                    $username = $row['username'];
                    $time = $row['time'];
                    $message = $row['message'];

                    // Kommentar des Users ausgeben
                    echo "<div>
                    $id - $username
                    </div>";
            } 
            // else {
            //     echo "<div class=\"redError\">";
            //     echo "No posts were found.";
            //     echo "</div>\n";
            // }
        };

    // DB schliessen

    mysqli_close($link);       


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