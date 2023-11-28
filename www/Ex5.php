<html>

<body>

Utilisez l'objet DateTime, sauf mention contraire.

Trouvez le numéro de semaine de la date suivante : 14/07/2019.

Combien reste-t-il de jours avant la fin de votre formation.

Comment déterminer si une année est bissextile ?

Montrez que la date du 32/17/2019 est erronée.

Affichez l'heure courante sous cette forme : 11h25.

Ajoutez 1 mois à la date courante.

Que s'est-il passé le 1000200000



<?php

// Trouver le numéro de semaine de la date 14/07/2019
$date1 = DateTime::createFromFormat('d/m/Y', '14/07/2019');
$numeroSemaine = $date1->format('W');
echo "Numéro de semaine pour le 14/07/2019 : $numeroSemaine\n";

// Calculer le nombre de jours restants avant la fin de la formation (supposons que la fin soit le 08/12/2023)
$dateFinFormation = new DateTime('08/12/2023');
$dateCourante = new DateTime();
$interval = $dateCourante->diff($dateFinFormation);
$joursRestants = $interval->days;
echo "Jours restants avant la fin de la formation : $joursRestants jours\n";

// Déterminer si une année est bissextile
$anneeTest = 2024;
if (date('L', strtotime("$anneeTest-01-01")) == 1) {
    echo "$anneeTest est une année bissextile.\n";
} else {
    echo "$anneeTest n'est pas une année bissextile.\n";
}

// Vérifier une date erronée
$dateErronee = DateTime::createFromFormat('d/m/Y', '32/17/2019');
if ($dateErronee === false) {
    echo "La date 32/17/2019 est erronée.\n";
}

// Afficher l'heure courante
$heureCourante = date('H\hi');
echo "Heure courante : $heureCourante\n";

// Ajouter 1 mois à la date courante
$dateCourante->add(new DateInterval('P1M'));
echo "Date courante après ajout d'un mois : " . $dateCourante->format('d/m/Y') . "\n";

// Que s'est-il passé le 1000200000
$dateEvenement = new DateTime('@1000200000');
echo "Événement le 13/09/2001 : " . $dateEvenement->format('d/m/Y H:i:s') . "\n";

?>

    
    
</table>

</body>

</html>