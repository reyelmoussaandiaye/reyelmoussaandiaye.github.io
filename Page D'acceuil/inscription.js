JavaScript (script.js) :

javascript
Copy code
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('notesForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du formulaire

        // Récupère les valeurs des champs de notes
        const mathNote = parseFloat(document.getElementById('math').value);
        const sciencesNote = parseFloat(document.getElementById('sciences').value);
        const histoireNote = parseFloat(document.getElementById('histoire').value);

        // Affiche les notes dans la console (vous pouvez les envoyer à un serveur pour les enregistrer)
        console.log("Note en Mathématiques :", mathNote);
        console.log("Note en Sciences :", sciencesNote);
        console.log("Note en Histoire :", histoireNote);

        // Affiche un message de succès
        alert("Les notes ont été enregistrées avec succès !");
    });
});