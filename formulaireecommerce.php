<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulaire pour ajouter des produits</title>
</head>

<body>
    <form action="/traitementeco.php" action="POST"></form>
    <div>
        <label for="lastname Custumer">Nom :</label>
        <input type="text" id="familyname" name="familyname" required
            pattern="^[a-zA-ZÀ-ÿ\s\-]+$"
            title="Le nom doit contenir que des lettres, des espaces et des tirets">
    </div>
    <div>
        <label for="firstname" id="firstname" name="firstname"></label>
        <input type="text" id="familyname" name="firstname" required
        pattern="^[a-zA-ZÀ-ÿ\s\-]+$"
            title="Le nom doit contenir que des lettres, des espaces et des tirets">
    </div>
    <div>
        <label for="nom du produit">Nom du produit à ajouter: </label>
        <input type="name" id="name" name="name" required
        pattern="^[a-zA-ZÀ-ÿ\s\-]+$"
            title="Le nom doit contenir que des lettres, des espaces et des tirets">
    </div>
    <div>
        <label for="prix du produit">prix du produit :</label>
        <input type="number" id="price" name="price" step="0.01" required>
    </div>
    <div>
        <button type="submit">Ajouter le produit</button>
    </div>
</body>

</html>