<?php
if (isset($_COOKIE['utilisateure2'])) {
    
    $nom = $_COOKIE['utilisateure2']; 
    echo "<p>Bienvenue, $nom!</p>";
} else {
        
    
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
    </head>
    <body>
        <form action="" method="post">
            <input type="text" name="nom" placeholder="Entrez votre nom" required>
            <button type="submit">Valider</button>

        </form>

        <?php
        if (isset($_POST['nom']) && !empty($_POST['nom'])) {
            $nom = htmlspecialchars($_POST['nom']); 
            $temps = 7 * 24 * 60 * 60; 
            setcookie("utilisateure2", $nom, time() + $temps); 

            
            echo "<p>Cookie enregistré avec succès ! Bonjour, $nom.</p>";
            echo "<script>location.reload();</script>";
            header("Location: cookies.php");
        }
        ?>
    </body>
    </html>
    <?php
}
?>
