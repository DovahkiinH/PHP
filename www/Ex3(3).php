<html>

<body>
$departements = array(

"Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),

"Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),

"Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),

"Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")

);

A partir du tableau ci-dessus:

Affichez la liste des régions (par ordre alphabétique) suivie du nom des départements

Affichez la liste des régions suivie du nombre de départements


<?php

$departements = array(
    "Hauts-de-france" => array("Aisne", "Nord", "Oise", "Pas-de-Calais", "Somme"),
    "Bretagne" => array("Côtes d'Armor", "Finistère", "Ille-et-Vilaine", "Morbihan"),
    "Grand-Est" => array("Ardennes", "Aube", "Marne", "Haute-Marne", "Meurthe-et-Moselle", "Meuse", "Moselle", "Bas-Rhin", "Haut-Rhin", "Vosges"),
    "Normandie" => array("Calvados", "Eure", "Manche", "Orne", "Seine-Maritime")
);


ksort($departements);
echo "<h2>Liste des régions par ordre alphabétique</h2>";
foreach ($departements as $region => $deps) {
    echo "<strong>$region</strong>: " . implode(", ", $deps) . "<br>";
}


echo "<h2>Liste des régions suivie du nombre de départements</h2>";
foreach ($departements as $region => $deps) {
    $nombreDepartements = count($deps);
    echo "<strong>$region</strong>: $nombreDepartements départements<br>";
}

?>


</body>

</html>