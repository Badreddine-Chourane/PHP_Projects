<?php

$pages = [
    "Accueil" => "accueil.html",
    "A propos" => "about.html",
    "Services" => "services.html",
    "Blog" => "blog.html",
    "Contact" => "contact.html"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Navigation</title>
 
</head>
<body>

    <h1>Menu de Navigation</h1>

    <!-- Menu dynamique -->
    <nav>
        <ul>
            <?php
           
            foreach ($pages as $nom => $url) {
                echo "<li><a href=\"$url\">$nom</a></li>";
            }
            ?>
        </ul>
    </nav>

</body>
</html>
