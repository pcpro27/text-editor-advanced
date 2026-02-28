<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Éditeur de texte avancé</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="editor-container">
        <div class="toolbar">
            <button onclick="formatText('bold')">Gras</button>
            <button onclick="formatText('italic')">Italique</button>
            <button onclick="saveDocument()">Sauvegarder</button>
        </div>
        <div id="editor" contenteditable="true"></div>
    </div>
    <script src="public/js/script.js"></script>
</body>
</html>