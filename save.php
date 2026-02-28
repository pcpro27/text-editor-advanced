<?php
// Logique pour sauvegarder les documents
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $content = $_POST['content'];
    $filename = DOCUMENTS_DIR . 'document_' . time() . '.html';
    file_put_contents($filename, $content);
    echo 'Document sauvegardé : ' . basename($filename);
}
?>