<html>

<body>

Lecture d'un fichier

Téléchargez ce fichier, il contient une liste de sites indispensables à la compréhension du monde moderne.

Écrire un programme qui lit ce fichier et qui construit une page web contenant une liste de liens hypertextes.

Utilisez la fonction file() qui permet de lire directement un fichier et renvoie son contenu sous forme de tableau.

<?php
// Nom du fichier à lire
$nomFichier = 'liens.txt';

// Lire le contenu du fichier dans un tableau
$contenuFichier = file($nomFichier, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// Vérifier si le fichier a pu être lu
if ($contenuFichier !== false) {
    echo '<ul>';

    // Parcourir le tableau et afficher chaque ligne comme un lien
    foreach ($contenuFichier as $ligne) {
        echo '<li><a href="' . $ligne . '">' . $ligne . '</a></li>';
    }

    echo '</ul>';
} else {
    echo 'Erreur lors de la lecture du fichier.';
}
?>
    
</table>

</body>

</html>