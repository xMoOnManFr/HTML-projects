<?php
//appel à la base de données
require 'config.php';

//requête Select
$sql = 'Select * from client';

//Affichage des données avec une boucle foreach
foreach($db->query($sql) as $row) {
    print $row['prenom'] . "<br>";
    print $row['ndfm'] . "\t";
    print $row['date_naissance'] . "\t";
    print $row['email'] . "\t";
    print $row['username'] . "\t";
    print $row['password'] . "\t";
    
}