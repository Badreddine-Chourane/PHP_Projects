<?php 
$conn = new mysqli ("localhost","root","","carnet_adresses") ; 
if ($conn->connect_error) { 
die (" Erreur de connexion : " . $conn->connect_error) ; 
} 

if ($_SERVER["REQUEST_METHOD"]==="POST") { 
    $nom = $_POST["nom"]; 
    $email = $_POST["email"]; 
    $telephone = $_POST["telephone"]; 
    $sql = "INSERT INTO contacts(nom,email,telephone )VALUES('$nom','$email','$telephone')"; 
    if ($conn-> query($sql)) { 
    header ("Location:index.php") ; 
    } else { 
    echo "Erreur :" .$conn->error ; 
    } 

    $conn->close() ; 
}
?>