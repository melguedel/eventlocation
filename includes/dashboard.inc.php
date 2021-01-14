
<?php


// Hole Daten des Beitrags aus DB
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
$secondID = $dbId;
$secondTitle
$secondInhalt


// Wenn der Save Button gedrückt wurde, update den Text von "About this location" in der DB:
if ( isset ($_POST['save']) ) {

    $title = strip_tags($_POST['title']);
    $inhalt = strip_tags($_POST['inhalt']);

    if ( !empty($title) && !empty($inhalt) ) {
        // Update Daten in DB
        $sql = "UPDATE content SET title = '$title', inhalt ='$inhalt' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        die("<div class=\"new\">Angaben gesichert</div>\n");
    }
}

// Wenn der Save Button gedrückt wurde, update den Text von "Explore and enjoy" in der DB:
if ( isset ($_POST['speichern']) ) {

    $title = strip_tags($_POST['title']);
    $inhalt = strip_tags($_POST['inhalt']);

    if ( $title != '' ) {
        // Update Daten in DB
        $sql = "UPDATE content SET title = '$title', inhalt ='$inhalt' WHERE id='$secondID'";
        $result = mysqli_query($conn, $sql);
        die("<div class=\"new\">Angaben gesichert</div>\n");
    }
}

?>

























?>