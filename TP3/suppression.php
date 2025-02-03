<?php

$con = mysqli_connect('127.0.0.1', 'root', '', 'gestion_etudiants') or die(mysqli_error($con));


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM etudiants WHERE id = $id";
    if (mysqli_query($con, $query)) {
        header("Location: affichage.php");
        exit();
    } else {
        echo "Erreur lors de la suppression : " . mysqli_error($con);
    }
} 
?>
