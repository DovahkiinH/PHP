<html>

<body>

$capitales = array(

    "Bucarest" => "Roumanie",

    "Bruxelles" => "Belgique",

    "Oslo" => "Norvège",

    "Ottawa" => "Canada",

    "Paris" => "France",

    "Port-au-Prince" => "Haïti",

    "Port-d'Espagne" => "Trinité-et-Tobago",

    "Prague" => "République tchèque",

    "Rabat" => "Maroc",

    "Riga" => "Lettonie",

    "Rome" => "Italie",

    "San José" => "Costa Rica",

    "Santiago" => "Chili",

    "Sofia" => "Bulgarie",

    "Alger" => "Algérie",

    "Amsterdam" => "Pays-Bas",

    "Andorre-la-Vieille" => "Andorre",

    "Asuncion" => "Paraguay",

    "Athènes" => "Grèce",

    "Bagdad" => "Irak",

    "Bamako" => "Mali",

    "Berlin" => "Allemagne",

    "Bogota" => "Colombie",

    "Brasilia" => "Brésil",

    "Bratislava" => "Slovaquie",

    "Varsovie" => "Pologne",

    "Budapest" => "Hongrie",

    "Le Caire" => "Egypte",

    "Canberra" => "Australie",

    "Caracas" => "Venezuela",

    "Jakarta" => "Indonésie",

    "Kiev" => "Ukraine",

    "Kigali" => "Rwanda",

    "Kingston" => "Jamaïque",

    "Lima" => "Pérou",

    "Londres" => "Royaume-Uni",

    "Madrid" => "Espagne",

    "Malé" => "Maldives",

    "Mexico" => "Mexique",

    "Minsk" => "Biélorussie",

    "Moscou" => "Russie",

    "Nairobi" => "Kenya",

    "New Delhi" => "Inde",

    "Stockholm" => "Suède",

    "Téhéran" => "Iran",

    "Tokyo" => "Japon",

    "Tunis" => "Tunisie",

    "Copenhague" => "Danemark",

    "Dakar" => "Sénégal",

    "Damas" => "Syrie",

    "Dublin" => "Irlande",

    "Erevan" => "Arménie",

    "La Havane" => "Cuba",

    "Helsinki" => "Finlande",

    "Islamabad" => "Pakistan",

    "Vienne" => "Autriche",

    "Vilnius" => "Lituanie",

    "Zagreb" => "Croatie"

);

A partir du tableau ci-dessus:

Affichez la liste des capitales (par ordre alphabétique) suivie du nom du pays.
Consultez la documentation PHP sur le tri des tableaux

Affichez la liste des pays (par ordre alphabétique) suivie du nom de la capitale.

Affichez le nombre de pays dans le tableau.

Supprimer du tableau toutes les capitales ne commençant par la lettre 'B', puis affichez le contenu du tableau.

<?php

$capitales = array(

    "Bucarest" => "Roumanie",

    "Bruxelles" => "Belgique",

    "Oslo" => "Norvège",

    "Ottawa" => "Canada",

    "Paris" => "France",

    "Port-au-Prince" => "Haïti",

    "Port-d'Espagne" => "Trinité-et-Tobago",

    "Prague" => "République tchèque",

    "Rabat" => "Maroc",

    "Riga" => "Lettonie",

    "Rome" => "Italie",

    "San José" => "Costa Rica",

    "Santiago" => "Chili",

    "Sofia" => "Bulgarie",

    "Alger" => "Algérie",

    "Amsterdam" => "Pays-Bas",

    "Andorre-la-Vieille" => "Andorre",

    "Asuncion" => "Paraguay",

    "Athènes" => "Grèce",

    "Bagdad" => "Irak",

    "Bamako" => "Mali",

    "Berlin" => "Allemagne",

    "Bogota" => "Colombie",

    "Brasilia" => "Brésil",

    "Bratislava" => "Slovaquie",

    "Varsovie" => "Pologne",

    "Budapest" => "Hongrie",

    "Le Caire" => "Egypte",

    "Canberra" => "Australie",

    "Caracas" => "Venezuela",

    "Jakarta" => "Indonésie",

    "Kiev" => "Ukraine",

    "Kigali" => "Rwanda",

    "Kingston" => "Jamaïque",

    "Lima" => "Pérou",

    "Londres" => "Royaume-Uni",

    "Madrid" => "Espagne",

    "Malé" => "Maldives",

    "Mexico" => "Mexique",

    "Minsk" => "Biélorussie",

    "Moscou" => "Russie",

    "Nairobi" => "Kenya",

    "New Delhi" => "Inde",

    "Stockholm" => "Suède",

    "Téhéran" => "Iran",

    "Tokyo" => "Japon",

    "Tunis" => "Tunisie",

    "Copenhague" => "Danemark",

    "Dakar" => "Sénégal",

    "Damas" => "Syrie",

    "Dublin" => "Irlande",

    "Erevan" => "Arménie",

    "La Havane" => "Cuba",

    "Helsinki" => "Finlande",

    "Islamabad" => "Pakistan",

    "Vienne" => "Autriche",

    "Vilnius" => "Lituanie",

    "Zagreb" => "Croatie"

);


ksort($capitales); 
echo "<h2>Liste des capitales par ordre alphabétique</h2>";
foreach ($capitales as $capitale => $pays) {
    echo "$capitale : $pays <br>";
}


asort($capitales);
echo "<h2>Liste des pays par ordre alphabétique</h2>";
foreach ($capitales as $capitale => $pays) {
    echo "$pays : $capitale <br>";
}


$nombrePays = count($capitales);
echo "<h2>Nombre de pays dans le tableau : $nombrePays</h2>";


foreach ($capitales as $capitale => $pays) {
    if (substr($capitale, 0, 1) != 'B') {
        unset($capitales[$capitale]);
    }
}


echo "<h2>Tableau après suppression des capitales ne commençant pas par 'B'</h2>";
foreach ($capitales as $capitale => $pays) {
    echo "$capitale : $pays <br>";
}

?>


</body>

</html>