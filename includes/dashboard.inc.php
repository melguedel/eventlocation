
<?php

// DB Verbindung
include_once('config.inc.php');


// HOME BEREICH BEARBEITEN


// Hole Daten des Beitrags aus DB der Kategorie "Home"
$query = "SELECT * FROM content WHERE `site_category` = 'home' ";
$resultat = mysqli_query($conn, $query);
if (mysqli_num_rows($resultat) > 0) {
    while ( $row = mysqli_fetch_assoc($resultat) ) {
        $dbTitle = $row['title'];
        $dbInhalt = $row['inhalt'];
        $dbId = $row['id'];
    }
} else {
    die("<div class=\"redError\">Could not find content</div>\n");
}
// var_dump($dbId);

// Variable mit Datenbank-Wert abgleichen
$title = $dbTitle;
$inhalt = $dbInhalt;
$id = $dbId;


// Wenn der Save Button gedrückt wurde, update den Text von "About this location" in der DB:
if ( isset ($_POST['save']) ) {

    $title = strip_tags($_POST['title']);
    $inhalt = strip_tags($_POST['inhalt']);

    if ( !empty($title) && !empty($inhalt) ) {
        // Update Daten in DB
        $sql = "UPDATE content SET title = '$title', inhalt ='$inhalt' WHERE id='2'";
        $result = mysqli_query($conn, $sql);
        die("<div class=\"new\">Angaben gesichert</div>\n");
    }
}

// Wenn der Save Button gedrückt wurde, update den Text von "Explore and enjoy" in der DB:
if ( isset ($_POST['save2']) ) {

    $secondTitle = strip_tags($_POST['title2']);
    $secondInhalt = strip_tags($_POST['inhalt2']);

    if ( !empty($secondTitle) && !empty($secondInhalt) ) {
        // Update Daten in DB
        $sql = "UPDATE content SET title = '$secondTitle', inhalt ='$secondInhalt' WHERE id='1'";
        $result = mysqli_query($conn, $sql);
        die("<div class=\"new\">Angaben gesichert</div>\n");
    }
}


// CONTENT BEREICH BEARBEITEN


// Hole Daten des Beitrags aus DB der Kategorie "contact"
$query2 = "SELECT * FROM content WHERE `site_category` = 'contact' ";
$resultat2 = mysqli_query($conn, $query2);
if (mysqli_num_rows($resultat2) > 0) {
    while ( $row = mysqli_fetch_assoc($resultat2) ) {
        $dbTitle3 = $row['title'];
        $dbInhalt3 = $row['inhalt'];
    }
} else {
    die("<div class=\"redError\">Could not find content</div>\n");
}

$thirdTitle = $dbTitle3;
$thirdInhalt = $dbInhalt3;

// Wenn der Save Button gedrückt wurde, update den Text von "Contact" in der DB:
if ( isset ($_POST['save3']) ) {

    $thirdTitle = strip_tags($_POST['title3']);
    $thirdInhalt = strip_tags($_POST['inhalt3']);

    if ( !empty($thirdTitle) && !empty($thirdInhalt) ) {
        // Update Daten in DB
        $sql2 = "UPDATE content SET title = '$thirdTitle', inhalt ='$thirdInhalt' WHERE id='3'";
        $result2 = mysqli_query($conn, $sql2);
        die("<div class=\"new\">Angaben gesichert</div>\n");
    }
}



























?>