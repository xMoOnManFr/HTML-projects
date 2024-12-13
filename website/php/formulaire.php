<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Formulaire</title>
    <link rel="icon" type="image/x-icon" href="/Images/favicon.png">
</head>
<body>
    <h1 id="topHeader">Formulaire</h1>
    
    <!--Captcha à faire disparaitre après avoir cliqué-->
    <div class="_captcha">
        <button id="monBouton" onclick="faireDisparaitre()">Cliquez-moi</button>
        <p id="Text_captcha">Cliquez pour accéder à la suite</p>
        <p id="After_Captcha" style="display: none;">Bien, commençons le formulaire</p>
    </div>

    <!-- Masquer cette section par défaut -->
    <form class="questions" action ="valid-form.php" style="display: none;" method="post" id="formulaire">

        <label for="prenom">Prénom:</label>
        <input type="text" id="prenom" placeholder="Jean"class="input_questions" autocomplete="off" value="" pattern="[A-Z][a-z]{1,8}" required> 
        <br>
        <label for="nom_de_famille">Nom de Famille:</label>
        <input type="text" id="nom_de_famille" placeholder="Pierre"class="input_questions" autocomplete="off" value="" pattern="^[a-zA-Z]+(-[a-zA-Z]+)?$"
        required>
        <br>
        <label for="birthday">Date de naissance:</label>
        <input type="date" id="birthday"class="input_questions" autocomplete="off" value="" >
        <br>
        <label for="email">Votre Email:</label>
        <input type="text" id="email" placeholder="Jean.pierre@domaine.com"class="input_questions" autocomplete="off" value="" >
        <br>
        <label for="tel">Tel:</label>
        <input type="tel" id="tel" placeholder="1234567890" class="input_questions" autocomplete="off" value="" required>
        <br>
        <label for="select_genre">Genre:</label>
        <select id="select_genre" value="">
            <option value="homme">Homme</option>
            <option value="femme">Femme</option>
            <option value="...">...</option>
            <option value="rien">Ne souhaite pas se prononcer</option>
        </select>
        <br>
        <input type="submit" id="submit" class="submit">
    </form> 

    <link rel="stylesheet" href="style_formulaire.css">
    <script src="script_form.js"></script>
    <script src="Inputs_form.js"></script>
    
</body>
</html>

