<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'gestion_etudiants') or die(mysqli_error($con));

if (isset($_POST['submit'])) {
    
    $nom = mysqli_real_escape_string($con, trim($_POST['nom']));
    $prenom = mysqli_real_escape_string($con, trim($_POST['prenom']));
    $email = mysqli_real_escape_string($con, trim($_POST['email']));
    $date_naissance = mysqli_real_escape_string($con, trim($_POST['date_naissance']));


    
        $query = "INSERT INTO etudiants (nom, prenom, email, date_naissance) VALUES ('$nom', '$prenom', '$email', '$date_naissance')";
        
        header("Location: affichage.php"); 
        if (mysqli_query($con, $query)) {
            header("Location: affichage.php"); 
            exit();
        } else {
            echo "Erreur : " . mysqli_error($con);
        }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Étudiant</title>
</head>
<body>
    <h1>Ajouter un Étudiant</h1>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom" required><br>
        <input type="text" name="prenom" placeholder="Prénom" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="date" name="date_naissance" placeholder="Date de naissance" required><br>
        <button type="submit" name="submit">Valider</button>
    </form>
</body>
</html>
