<?php
    session_start();
if (isset($_POST['nom']).isset($_POST['prenom'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];

    $_SESSION['nom']=$nom;
    $_SESSION['prenom']=$prenom;
    echo "bonjour". $_SESSION['nom']." ".$_SESSION['prenom'];

}
else{
    header("Location: donne.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <button name = "end">end</button>
    </form>
    <?php
    if (isset($_POST['end'])){
        session_destroy();
        header("Location: donne.php");

        

    }
    ?>
</body>
</html>

