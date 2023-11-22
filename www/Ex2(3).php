<html>

<body>

Ecrire un script qui affiche la table de multiplication pour les nombres de 1 à 9 dans un tableau HTML, le résultat doit ressembler à ceci 

<table border="1">
    <tr>
        <th></th>
        <?php
        // En-têtes de colonne
        for ($i = 1; $i <= 9; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php
    // Corps du tableau
    for ($i = 1; $i <= 9; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; // En-tête de ligne

        // Multiplication
        for ($j = 1; $j <= 9; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }

        echo "</tr>";
    }
    ?>
    
</table>

</body>

</html>