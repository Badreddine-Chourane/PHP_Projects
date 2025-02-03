<?php

$servername ="localhost";
$username="root";
$password="";

try{
    $conn = new PDO("mysql:host=$servername;dbname=mydb",$username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connected successfully";

    $stmt= $conn->prepare("INSERT INTO USER 
    (nom,prenom,email)
    VALUES (:lastname, :firstname, :email)");
    
    $stmt->bindParam(':lastname',$nom);
    $stmt->bindParam(':firstname',$prenom);
    $stmt->bindParam(':email',$email);
    
    
    $prenom = "badreddine";
    $nom = "chourane";
    $email= "chourane@gmail.com";
    
    $stmt->execute();
    
    
    $prenom = "adam";
    $nom = "abid";
    $email= "abid@gmail.com";
    
    $stmt->execute();
    
    echo "New records created successfully";
}

catch(PDOException $e){
    echo "co
    nnection failed : " . e->getMessage();
}
$conn=null;


?>