<?php
function writeSecretSentence($param1, $param2) {// function writeSecretSentence have created with 2 parametre
        $sentence = "$param1 . s'incline à . $param2"; // Recreate a secret sentence

        return $sentence; // return (renvoie) the sentence 
}

echo writeSecretSentence($sentence);
    
?>