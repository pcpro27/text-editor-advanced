function formatText(command) {
    document.execCommand(command, false, null);
}

function saveDocument() {
    const content = document.getElementById('editor').innerHTML;
    alert('Contenu à sauvegarder : ' + content);
    // Ici, tu pourrais ajouter une requête AJAX pour envoyer le contenu au serveur PHP
}