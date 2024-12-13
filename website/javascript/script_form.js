//js rechercher sur ggl
function faireDisparaitre() {
    const bouton = document.getElementById("monBouton");
    const texteCaptcha = document.getElementById("Text_captcha");
    const afterCaptcha = document.getElementById("After_Captcha");
    const formulaire = document.getElementsByClassName("questions")[0]; // Sélectionne le 1er élément

    // Masquer le bouton et le texte actuel
    bouton.style.display = "none";
    texteCaptcha.style.display = "none";

    // Afficher le nouveau texte
    afterCaptcha.style.display = "block";

    // Afficher le formulaire
    formulaire.style.display = "block";
}