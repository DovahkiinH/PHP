<html>

<body>

Ecrire un script PHP qui affiche tous les nombres impairs entre 0 et 150, par ordre croissant : 1 3 5 7...

    <?php 
    for ($i = 1; $i <= 150; $i += 2) {
        echo $i . " ";
    }
    ?>
    
</body>

</html>