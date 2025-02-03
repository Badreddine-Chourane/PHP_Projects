<?php
session_start();

if (!isset($_SESSION['nom'])){
    header("Location: index.php");
    exit;
}

$nom = $_SESSION['nom'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<h1>Bienvenue <?php echo $nom; ?> </h1>

<p>vous étes maintenant connecté</p>


<form action="deconnexion.php" method="post">

    <button type="submit">Se Deconnecter</button>
</form>
    
</body>
</html>