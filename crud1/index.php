<?php 
$conn = new mysqli ("localhost","root","","carnet_adresses") ; if ($conn->connect_error) { 
die (" Erreur de connexion : " . $conn->connect_error) ; 
} 
$sql = " SELECT * FROM contacts "; 
$result = $conn->query($sql); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border=1>
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>email</th>
        <th>telephone</th>
        <th>action</th>
    </tr>
    <?php
    foreach($result as $row){?>
    <tr>
        <td><?php echo $row ["id"]; ?> </td>
        <td><?php echo $row ["nom"]; ?> </td>
        <td><?php echo $row ["email"]; ?> </td>
        <td><?php echo $row ["telephone"]; ?> </td>
        <td><a href="modifier.php?id=<?php echo$row["id"]?>">modifier |<a href="suprimer.php?id=<?php echo$row["id"]?>">suprimer |</a></td>
         </tr>



   <?php }
    ?>
</table>
<br><br><br>

<h2 > Ajouter un Contact </h2 > 
<form method ="POST" action ="ajouter.php" > 
    <label >Nom : </ label > <br > 
<input type ="text" name ="nom" required > <br > 
<label > Email : </ label > <br > 
<input type ="email" name ="email" required > <br > 
<label > T l p h o n e : </ label > <br > 
<input type ="text" name ="telephone" > <br ><br > 
<button type ="submit"> Ajouter </ button > 
</form > 

    
</body>
</html>