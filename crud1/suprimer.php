<?php 
$conn = new mysqli ("localhost","root","","carnet_adresses"); 


if ($_SERVER["REQUEST_METHOD"]==="GET") { 
    $id = $_GET["id"];
    $sql="DELETE FROM contacts WHERE id=$id";
    header ("Location:index.php") ; 
    $conn->close() ; 



}
?>
