<?php
    // Connexion à la base de données MySQL
    $conn = new mysqli("localhost", "root", "", "monbdd"); // connection à mysql sur serveur local sur la base de donné demandée

    if ($conn->connect_error) {
        die("La connexion a échoué : " . $conn->connect_error);
    }

    // Exemple d'ID utilisateur
    $utilisateur_id = 1;

    // Requête SQL pour récupérer le nom et le prénom de l'utilisateur avec un ID spécifique
    $sql = "SELECT nom, email FROM utilisateurs WHERE id = $utilisateur_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Affichage des données de l'utilisateur
        while ($row = $result->fetch_assoc()) {     // fdetch_assoc Récupère la ligne suivante d'un ensemble de résultats sous forme de tableau associatif
            echo "Nom: " . $row["nom"]. " - Email: " . $row["email"]. "
                                            <br>
                                            ";
        }
    } else {
        echo "Aucun utilisateur trouvé avec cet ID.";
    }

    // Fermeture de la connexion
    $conn->close();
?>