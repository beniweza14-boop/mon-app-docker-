<?php
$host = 'db'; 
$user = 'root';
$pass = 'Lubum_Dev_2026!'; // Le mot de passe que j'ai choisi
$db   = 'app_db_lubumbashi';

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "<div style='text-align:center; margin-top:50px; font-family:sans-serif;'>";
    echo "<h1 style='color: #2ecc71;'>🚀 Connexion réussie !</h1>";
    echo "<p>Ton application PHP communique parfaitement avec MySQL dans Docker.</p>";
    echo "</div>";
} catch (PDOException $e) {
    echo "<h1 style='color: #e74c3c;'>Erreur de connexion</h1>";
    echo "<p>" . $e->getMessage() . "</p>";
}
?>