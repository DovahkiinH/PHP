<html>

<body>

Ecrivez une fonction qui permette de générer un lien.


La fonction doit prendre deux paramètres, le lien et le titre



<?php

function genererLien($url , $texte) {
    return "<a href=\"$url\">$texte</a>";
}

$texteDuLien = "Reddit Hug";
$urlDuLien = "https://www.reddit.com";
$lienGenere = genererLien($urlDuLien, $texteDuLien);

echo $lienGenere;

?>
   
</body>

</html>