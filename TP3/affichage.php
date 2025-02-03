<?php
$con = mysqli_connect('127.0.0.1', 'root', '', 'gestion_etudiants') or die(mysqli_error($con));
$query = "SELECT * FROM etudiants";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Étudiants</title>
    
</head>
<body>
    <h1>Liste des Étudiants</h1>
    <table border=1>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rows as $row) { ?>
                <tr>
                    <td><?= ($row['id']) ?></td>
                    <td><?= ($row['nom']) ?></td>
                    <td><?= ($row['prenom']) ?></td>
                    <td><?= ($row['email']) ?></td>
                    <td><?= ($row['date_naissance']) ?></td>
                    <td>                     
                        <a href="modification.php?id=<?= ($row['id']) ?>">Modifier</a>
                        <a href="suppression.php?id=<?= ($row['id']) ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet étudiant ?');">Supprimer</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="ajout.php">ajouter</a>
</body>
</html>
