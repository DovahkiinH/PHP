<html>

<body>

Ecrivez une fonction qui calcul la somme des valeurs d'un tableau

<?php

function calculerSomme($tableau) {
    return array_sum($tableau);
}


$valeurs = array(4, 3, 8, 2);
$resultat = calculerSomme($valeurs);

echo "La somme des valeurs du tableau est : $resultat";

?>
   
</body>

</html>