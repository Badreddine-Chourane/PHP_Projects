<?php
$servername ="localhost";
$username="root";
$password="";


$conn=new mysqli($servername, $username,$password);


if ($conn->connect_error){
    die("connection failed" . $conn->connect_error);
}
    $stmt= $conn->prepare("INSERT INTO user 
    (nom,prenom,email)
    VALUES (?,?,?)");
    $stmt->bind_param("sss",$nom,$prenom,$email);
    $prenom = "badreddine";
    $nom = "chourane";
    $email= "chourane@gmail.com";
    
    $stmt->execute();
    
    
    $prenom = "adam";
    $nom = "abid";
    $email= "abid@gmail.com";
    
    $stmt->execute();
    
    echo "New records created successfully";
    $smtm->close();
    $conn->close();
?>