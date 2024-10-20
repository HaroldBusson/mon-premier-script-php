<?php
<form action="" method="get">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>
    <div>
        <label for="email">Courriel :</label>
        <input type="email" id ="email" name="user_email">
    </div>
    <div>
        <label for="message">Message :</label>
        <textarea id="message" name="user_email"></textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer votre message</button>
    </div>
</form>
var_dump($_GET);
?>