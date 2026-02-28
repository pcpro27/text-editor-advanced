<?php
// Logique pour gérer l'édition des documents
// Exemple : Charger un document existant
if (isset($_GET['file'])) {
    $file = DOCUMENTS_DIR . $_GET['file'];
    if (file_exists($file)) {
        echo file_get_contents($file);
    }
}
?>