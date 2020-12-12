<?php
// verbinden mit dem mysql server (Localhost Zugangsdaten: xampp: root {leer} / mamp: root root)
define("DBSERVER", 'localhost');
define("DBUSER", 'root');
define("DBPASSWORT", 'root');
define("DBNAME", 'admins');

$conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORT, DBNAME) OR die('DB verbindung hat nicht geklappt: '.mysqli_connect_error());
?>