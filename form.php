<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="form.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="name" name="first_name">
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id ="email" name="user_email">
    </div>
    <div>
        <label for="phone"> Téléphone :</label>
        <input type="tel" id="phone" name="user_phone">
    </div>
    <div>
        <label for="topic">Sujet :</label>
        <select name="topic" id="topic-select">
        <option value="sujet 1">sujet numero 1</option>
        <option value="sujet 2">sujet numero 2</option>
        <option value="sujet 3">sujet numero 3</option>
        </select>
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_email"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
</body>
</html>
<?php
  var_dump($_GET);
?>