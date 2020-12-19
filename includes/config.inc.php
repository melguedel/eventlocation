
<?php

// Datenbank Verbindung

define("DBSERVER", 'localhost');
define("DBUSER", 'root');
define("DBPASSWORT", 'root');
define("DBNAME", 'test_blog');

// Datenbankverbindung checken
$conn = mysqli_connect(DBSERVER, DBUSER, DBPASSWORT, DBNAME) OR die('Database Connection didnt work: '.mysqli_connect_error());


?>