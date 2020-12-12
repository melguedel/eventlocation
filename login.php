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
    <!-- <link rel="stylesheet" href="css/login.css"> -->

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

    <!-- Login or Registration -->

    <section id="loginSection">

            <!-- Registration -->

                <form id="registerForm" method="POST" class="logForm">

                        <h2>Register for updates and goodies!</h2>

                            <!-- Radiobuttons -->
                            <div class="radiobtn">
                                <label for="female">Female</label>
                                <input type="radio" id="female" name="sex" checked>

                                <label for="male">Male</label>
                                <input type="radio" id="male" name="sex">

                            </div>

                            <!-- Eingabefelder -->
                            <label for="username">Username</label>
                            <input type="text" name="username">
                            <div class="redError"></div>

                            <label for="email">E-Mail</label>
                            <input type="text" name="email">
                            <div class="redError"></div>

                            <label for="passWord">Password</label>
                            <input type="text" name="passWord">
                            <div class="redError"></div>

                            <!-- Terms and Conditions -->
                            <label for="agb">Accept terms and conditions
                            <input type="checkbox" name="agb"></label>
                            <div class="redError"></div>

                            <!-- Form nicht ausgefüllt -->
                            <div class="redError"></div>

                            <!-- Form korrekt abgeschickt -->
                            <div class="new"></div>

                            <!-- Submit -->
                            <input type="submit" class="subBtn" name="submit" value="Register"></input>

                            <!-- Change to Login Form or Register Form -->
                            <p class="logMessage">Already registered? <a class="toggleBtn">Sign in</a></p>

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