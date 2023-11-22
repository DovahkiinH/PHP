<html>

<body>

Ecrivez un script qui affiche l'adresse IP du serveur et celle du client.

    <?php 
    echo "l'adresse IP du serveur est :" , $_SERVER["SERVER_ADDR"];

    echo "l'adresse IP du client est :" , $_SERVER["REMOTE_ADDR"];
    ?>
    
</body>

</html>