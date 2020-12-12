<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Crystal Lake Events. Concerts, Festivals, Weddings and other Events. Book now!">

    <!-- Favicons -->

    

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
    <title>Crystal Lake Events</title>

</head>

<body>

    <!-- Navbar -->

    <?php include "includes/navbar.html"?>

    <!-- Guestbook Login -->

    <!-- Login Form -->

    <form class="logForm" method="POST">

        <h2>Share your thoughts!</h2>
        <p class="regInfo">You must be logged in to comment</p>

        <label for="userName">Username<input type="text" name="userName" value=""> </label>
        <div class="redError"></div>

        <label for="password">Password<input type="text" name="password" value=""></label>
        <div class="redError"></div>

        <div class="row">
            <form class="col s12">
            <div class="row">
                <div class="input-field col s12">
                <textarea id="textarea1" class="materialize-textarea"></textarea>
                <label for="textarea1">Textarea</label>
                </div>
            </div>
            </form>
        </div>
        <div class="redError"></div>

        <input type="submit" class="subBtn" value="Share your comment"></input>


</form>
    

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