<?php

if (isset($_POST['nom'], $_POST['note1'], $_POST['note2'], $_POST['note3'])) {

    $nom = $_POST['nom'];
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];
    $note3 = $_POST['note3'];

    
    $moyenne = ($note1 + $note2 + $note3) / 3;

    if ($moyenne >= 16) {
        $mention = "Très Bien";
    } elseif ($moyenne >= 14) {
        $mention = "Bien";
    } elseif ($moyenne >= 10) {
        $mention = "Assez Bien";
    } else {
        $mention = "Passable";
    }

    echo "<h1>Résultats pour $nom</h1>";
    echo "<p><strong>Moyenne :</strong> " . number_format($moyenne, 2) . "</p>";
    echo "<p><strong>Mention :</strong> $mention</p>";


    
}


?>