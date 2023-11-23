<html>

<body>
Créez un tableau associant à chaque mois de l’année le nombre de jours du mois.

Utilisez le nom des mois comme clés de votre tableau associatif.

Affichez votre tableau (dans un tableau HTML) pour faire apparaitre sur chaque ligne le nom du mois et le nombre de jours du mois.

Triez ensuite votre tableau en utilisant comme critère le nombre de jours, puis affichez le résultat.



        <?php
       
       $mois_jours = [
           "Janvier" => 31,
           "Février" => 28, 
           "Mars" => 31,
           "Avril" => 30,
           "Mai" => 31,
           "Juin" => 30,
           "Juillet" => 31,
           "Août" => 31,
           "Septembre" => 30,
           "Octobre" => 31,
           "Novembre" => 30,
           "Décembre" => 31
       ];
       
       
       echo "<h2>Tableau initial</h2>";
       afficherTableau($mois_jours);
       
       
       asort($mois_jours);
       
       
       echo "<h2>Tableau trié par le nombre de jours</h2>";
       afficherTableau($mois_jours);
       
      
       function afficherTableau($tableau)
       {
           echo "<table border='1'>";
           echo "<tr><th>Mois</th><th>Nombre de jours</th></tr>";
           
           foreach ($tableau as $mois => $jours) {
               echo "<tr><td>$mois</td><td>$jours</td></tr>";
           }
       
           echo "</table>";
       }
       
        ?>

</body>

</html>