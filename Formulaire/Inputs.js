// Ajouter un événement au formulaire
document.getElementById("formulaire").addEventListener("submit", function (event) {
    // Empêche le comportement par défaut (rechargement de la page)
    event.preventDefault();

    // Récupérer les inputs
    let prenom = document.getElementById("prenom").value;
    let nom = document.getElementById("nom_de_famille").value;
    let bday = document.getElementById("birthday").value;
    let email = document.getElementById("email").value;
    let tel = document.getElementById("tel").value;
    let genre = document.getElementById("select_genre").value;

    // Afficher dans la console les valeurs
    console.log("Prénom :", prenom);
    console.log("Nom :", nom);
    console.log("Date de naissance :", bday);
    console.log("Email :", email);
    console.log("Téléphone :", tel);
    console.log("Genre :", genre);
});
