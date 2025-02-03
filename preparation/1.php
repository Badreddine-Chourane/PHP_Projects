<?php
session_start();
if (isset($_POST['username'])) {
    $_SESSION['username'] = $_POST['username'];
}

if (!isset($_SESSION['username'])) {
    
        $_SESSION['username'] = "Invité";
    
}

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 1;
} else {
    $_SESSION['counter']++;
}
if ($_SESSION['counter'] >= 10) {
    $_SESSION['counter'] = 1; // Réinitialise le compteur
}

echo "Bonjour, " . $_SESSION['username'] . "! C'est votre visite numéro " . $_SESSION['counter'];


?>

<form method="POST">
    <label for="username">Entrez votre nom :</label>
    <input type="text" name="username" id="username" required>
    <button type="submit">Valider</button>
</form>
