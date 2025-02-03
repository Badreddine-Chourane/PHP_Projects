<?php

function addition($a, $b) {
    return $a + $b;
}

function soustraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Erreur : Division par zéro.";
    }
    return $a / $b;
}


if (isset($_POST['num1'], $_POST['num2'], $_POST['operation'])) {
    
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];
    $resultat = '';

   
    if ($operation == 'addition') {
        $resultat = addition($num1, $num2);
    } elseif ($operation == 'soustraction') {
        $resultat = soustraction($num1, $num2);
    } elseif ($operation == 'multiplication') {
        $resultat = multiplication($num1, $num2);
    } elseif ($operation == 'division') {
        $resultat = division($num1, $num2);
    }

    
    echo "<h3>Résultat : $resultat</h3>";
}
?>
