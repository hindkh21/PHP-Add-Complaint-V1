<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reclamation";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    echo "Echec de la connexion à la base de données: " . $e->getMessage();
}

$msg = '';
// Check if POST data is not empty
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $titre = $_POST['titre'];
    $description = $_POST['description'];
    $role = $_POST['role'];
    $created = $_POST['created'];

    try {
        $stmt = $pdo->prepare("INSERT INTO reclamation (id, titre, description, role,created) VALUES (:id, :titre, :description, :role, :created)");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':titre', $titre);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':created', $created);
        $stmt->execute();
        $msg = 'Created Successfully!';
        header('Location: index.php');
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
