<?php
include("config.php");

$username = $_POST["username"];
$password = $_POST["password"];

$sql = 'Select * from client';

$result;



foreach($db->query($sql) as $row) {
    if( $row['username'] == $username && $row['password'] == $password ) {
        $result = "existe";
        ob_start();
         header("Location: template profil.html");
        ob_end_flush();
    }else{
        $result = "existe pas";
        ob_start();
        header("Location: formulaire.php");
        ob_end_flush();
    }
    
}

?>