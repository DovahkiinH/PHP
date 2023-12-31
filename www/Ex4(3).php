<html>

<body>

Créer une fonction qui vérifie le niveau de complexité d'un mot de passe


Elle doit prendra un paramètre de type chaîne de caractères. Elle retournera une valeur booléenne qui vaut true si le paramètre (le mot de passe) respecte les règles suivantes :

Faire au moins 8 caractères de long
Avoir au moins 1 chiffre
Avoir au moins une majuscule et une minuscule

<?php

function verifierMotDePasse($motDePasse) {

    $longueur = strlen($motDePasse);
    if ($longueur < 8) {
        return false;
    }

    if (!preg_match('/[0-9]/', $motDePasse)) {
        return false;
    }

    if (!preg_match('/[A-Z]/', $motDePasse) || !preg_match('/[a-z]/', $motDePasse)) {
        return false;
    }

    return true;
}

$motDePasseTest = "Mot2Passe";
$resultat = verifierMotDePasse($motDePasseTest);

if ($resultat) {
    echo "Le mot de passe est valide.";
} else {
    echo "Le mot de passe ne respecte pas les règles de complexité.";
}

?>

   
</body>

</html>