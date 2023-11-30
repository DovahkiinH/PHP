<!-- login_form.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
</head>
<body>
    <h2>Formulaire de Connexion</h2>
    <form action="login_script.php" method="post">
        <label for="login">Login (email): </label>
        <input type="text" id="login" name="login" required><br>

        <label for="password">Mot de passe: </label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Se Connecter">
    </form>

    <?php

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST["login"];
    $password = $_POST["password"];

    if ($login === "admin" && $password === "admin") {

        $_SESSION["auth"] = "ok";
        header("Location: page_protegee.php");
        exit();
    } else {

        session_destroy();
        header("Location: login_form.php");
        exit();
    }
} else {

    header("Location: login_form.php");
    exit();
}
?>

<?php

session_start();


if (isset($_SESSION["auth"]) && $_SESSION["auth"] === "ok") {
    echo "<h2>Page Protégée</h2>";
    echo "<p>Contenu confidentiel...</p>";
    echo '<a href="logout.php">Se Déconnecter</a>'; 
} else {

    header("Location: login_form.php");
    exit();
}
?>

<?php

session_start();


session_destroy();
header("Location: login_form.php");
exit();
?>




</body>
</html>
