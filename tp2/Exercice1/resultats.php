<?php

if (isset($_POST['nombres'])) {
   
    $nombresStr = $_POST['nombres'];

    $nombresStr = str_replace(' ', ',', $nombresStr);

    
    echo "Chaîne après remplacement des espaces par des espaces : $nombresStr<br>";

    $nombres = array_map('trim', explode(',', $nombresStr)); 

        $nombres = array_map('floatval', $nombres);

        $somme = array_sum($nombres);

        $moyenne = $somme / count($nombres);

        $maximum = max($nombres);

        $minimum = min($nombres);

        echo "<h1>Résultats</h1>";
        echo "<p><strong>Somme :</strong> $somme</p>";
        echo "<p><strong>Moyenne :</strong> $moyenne</p>";
        echo "<p><strong>Maximum :</strong> $maximum</p>";
        echo "<p><strong>Minimum :</strong> $minimum</p>";
   
}
?>

<p><a href="index.html">Retour au formulaire</a></p>
