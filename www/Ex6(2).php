<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Liste des Utilisateurs</title>
</head>
<body>

Un site partenaire met à votre disposition une liste des nouveaux utilisateurs inscrits.

Cette liste est disponible à cette adresse https://ncode.amorce.org/customers.csv.

Il s'agit d'un fichier CSV où chaque ligne représente un nouvel utilisateur. Les différents champs sont Surname, Firstname, Email, Phone, City, State, ils sont séparés par une virgule ,.

Utilisez la fonction file() pour récupérer le contenu de ce fichier.

Découpez chaque ligne en utilisant une des fonctions suivantes: explode() ou preg_split()

Affichez le résultat dans un tableau HTML avec Bootstrap en prenant bien soin de nommer les colonnes du tableau.


<div class="container">
    <h2>Liste des Utilisateurs</h2>

    <?php
    $contenuFichier = file('https://ncode.amorce.org/customers.csv');

    if ($contenuFichier !== false) {
        echo '<table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Surname</th>
                        <th>Firstname</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>City</th>
                        <th>State</th>
                    </tr>
                </thead>
                <tbody>';

        foreach ($contenuFichier as $ligne) {

            $utilisateur = explode(',', $ligne);

            echo '<tr>';
            echo '<td>' . $utilisateur[0] . '</td>';
            echo '<td>' . $utilisateur[1] . '</td>';
            echo '<td>' . $utilisateur[2] . '</td>';
            echo '<td>' . $utilisateur[3] . '</td>';
            echo '<td>' . $utilisateur[4] . '</td>';
            echo '<td>' . $utilisateur[5] . '</td>';
            echo '</tr>';
        }

        echo '</tbody></table>';
    } else {
        echo 'Erreur lors de la lecture du fichier.';
    }
    ?>
</div>

</body>
</html>