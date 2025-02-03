    <?php
    session_start();
    if (isset($_SESSION['nom'])){
        header("Location: bienvenue.php");

        exit;
    }


    if(isset($_POST["nom"])){
        $_SESSION['nom']=$_POST["nom"];
        header("Location: bienvenue.php");
        exit;

    }




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

            
        </body>
        </html>