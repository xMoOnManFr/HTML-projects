<?php
$user = 'root';
$pass = '';

try {
$db = new PDO (dsn: 'mysql:host=localhost;dbname=easytutorial', username: $user,password: $pass );

} catch (\PDOException $e) {
    print "erreur :" . $e->getMessage () ."<br/>";
    die;
}