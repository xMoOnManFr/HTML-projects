<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<div class="top_text">  
    <h1 class="top_text">Entrez vos indentifiants</h1>    
</div>
  <form class="form_class">
    <label for="username" class="inputs">USERNAME:</label>
    <input type="text" id="username" class="inputs" autocomplete="off" value="" required>
    <br>
    <label for="password" class="inputs">PASSWORD:</label>
    <input type="password" id="password" class="inputs" autocomplete="off" value="">
    <br>
    <button id="button" onclick="changepage">Valider</button>
  </form>


<link href="/css/style_login.css" rel="stylesheet">
<script>
    function changepage(){
        window.location.replace("/php/valid_login.php")
    }
</script>
</body>
</html>

<?php

?>