<?php
// Paramètres de connexion à la base de données
$host = 'localhost';      // L'hôte de la base de données (par exemple, localhost)
$dbname = 'ecommerce';    // Le nom de la base de données
$username = 'root';       // Votre nom d'utilisateur pour la base de données
$password = '';           // Votre mot de passe pour la base de données

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Définir le mode d'erreur de PDO pour qu'il lance une exception en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les données envoyées par le formulaire
        $id_order = isset($_POST['id_order']) ? (int)$_POST['id_order'] : null;
        $id_product = isset($_POST['id_product']) ? (int)$_POST['id_product'] : null;
        $quantity = isset($_POST['quantity']) ? (int)$_POST['quantity'] : null;

        // Validation des données (s'assurer que les champs ne sont pas vides)
     if (empty($id_order) || empty($id_product) || empty($quantity)) {
            echo "Tous les champs doivent être remplis.";
        } else {
            // Préparer la requête SQL pour insérer les données dans la table
            $sql = "INSERT INTO OrderOrder_Product (id_order, id_product, quantity) VALUES (:id_order, :id_product, :quantity)"; // : car ceux sont des variables
            
            // Préparer la requête
            $stmt = $pdo->prepare($sql);
            
            // Lier les paramètres à la requête préparée
            $stmt->bindParam(':id_order', $id_order, PDO::PARAM_INT); //  bindParam aide à prévenir les injections SQL.
            $stmt->bindParam(':id_product', $id_product, PDO::PARAM_INT); // bindParam pour lier les variables PHP
            $stmt->bindParam(':quantity', $quantity, PDO::PARAM_INT); // PDO::PARAM_INT indique à PDO que ces paramètres doivent être interprétés comme des entiers
            
            // Exécuter la requête
         if ($stmt->execute()) {
                echo "Les données ont été insérées avec succès.";
            } else {
                echo "Erreur lors de l'insertion de données.";
            }
?>