<!-- CK Editor  -->
         
<?php

// In ein Textfile schreiben
if ( isset($_POST['save']) ) {
    schreibeContent("content.txt");
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