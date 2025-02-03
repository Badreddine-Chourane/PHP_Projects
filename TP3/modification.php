<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'gestion_etudiants') or die(mysqli_error($con));


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $query = "SELECT * FROM etudiants WHERE id = $id";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $student = mysqli_fetch_assoc($result);
    } else {
        echo "Étudiant non trouvé.";
        exit();
    }
} else {
    echo "ID invalide.";
    exit();
}


if (isset($_POST['update'])) {

    $nom = mysqli_real_escape_string($con, trim($_POST['nom']));
    $prenom = mysqli_real_escape_string($con, trim($_POST['prenom']));
    $email = mysqli_real_escape_string($con, trim($_POST['email']));
    $date_naissance = mysqli_real_escape_string($con, trim($_POST['date_naissance']));


   
        $query = "UPDATE etudiants 
                  SET nom = '$nom', 
                  prenom = '$prenom', 
                  email = '$email', 
                  date_naissance = '$date_naissance' 
                  WHERE id = $id";

        if (mysqli_query($con, $query)) {
            header("Location: affichage.php");
            exit();
        } else {
            echo "Erreur lors de la mise à jour : " . mysqli_error($con);
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier un Étudiant</title>
</head>
<body>
    <h1>Modifier un Étudiant</h1>
    <form action="" method="post">
        <input type="text" name="nom" placeholder="Nom" value="<?= htmlspecialchars($student['nom']) ?>" required><br>
        <input type="text" name="prenom" placeholder="Prénom" value="<?= htmlspecialchars($student['prenom']) ?>" required><br>
        <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($student['email']) ?>" required><br>
        <input type="date" name="date_naissance" placeholder="Date de naissance" value="<?= htmlspecialchars($student['date_naissance']) ?>" required><br>
        <button type="submit" name="update">Mettre à jour</button>
    </form>
</body>
</html>
