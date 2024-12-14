<?php
include("config.php");

// $username = $_POST["username"];
// $username = $_POST["username"];
// $prenom = $_POST["prenom"];
// $ndfm = $_POST["ndfm"];
// $date_naissance = $_POST["date_naissance"];
// $email = $_POST["email"];
// $telephone = $_POST["telephone"];
// $genre = $_POST["genre"];
$insert = "INSERT INTO client VALUES";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the client's input
    $username = $_POST["username"];
    $password = $_POST["password"];
    $prenom = $_POST["prenom"];
    $ndfm = $_POST["ndfm"];
    $date_naissance = $_POST["date_naissance"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $genre = $_POST["genre"];
}
try {
    // Prepare the SQL query to insert data
    $sql = "INSERT INTO client (prenom, ndfm, date_naissance, email, telephone, genre, username, password) VALUES($prenom,$ndfm, $date_naissance,$email,$telephone,$genre,$username,$password )";
    $stmt = $pdo->prepare($sql);

    // Bind the form values to the query parameters
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':ndfm', $ndfm);
    $stmt->bindParam(':date_naissance', $date_naissance);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telephone', $telephone);
    $stmt->bindParam(':genre', $genre);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    // Execute the statement
    $stmt->execute();

    // Success message
    echo "Data inserted successfully!";
} catch (PDOException $e) {
    // Handle errors (e.g., invalid query, database issues)
    echo "Error inserting data: " . $e->getMessage();
}
?>