<?php
session_start();
session_destroy();
// Session beenden und zurückkehren zu Login
header("Location: login.php");

// Anzeige für User: erfolgreiches Logout
echo "<div class=\"new\">";
echo "Logout successfull!";
echo "</div>\n";
?>