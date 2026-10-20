<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4</title>
</head>
<body>
    <h1>Exercice 4</h1>
    <?php
    $entier = 42;
    $chaine = "42";
    $decimal = 15.8;
    $vrai = true;
    $faux = false;
    $vide = null;

    echo "<h2>Types et valeurs</h2><pre>";
    var_dump($entier);
    var_dump($chaine);
    var_dump($decimal);
    var_dump($vrai);
    var_dump($faux);
    var_dump($vide);
    echo "</pre>";

    echo "<h2>Conversions</h2><pre>";
    var_dump((int) $chaine);
    var_dump((int) $decimal);
    var_dump((string) $entier);
    echo "</pre>";

    echo "<h2>Booléens avec echo</h2>";
    echo "true : " . $vrai . "<br>";
    echo "false : " . $faux . "<br>";

    echo "<h2>Booléens avec var_dump</h2><pre>";
    var_dump($vrai);
    var_dump($faux);
    echo "</pre>";

    echo "<h2>Conversion en booléen</h2><pre>";
    var_dump((bool) 0);
    var_dump((bool) "0");
    var_dump((bool) "PHP");
    var_dump((bool) []);
    echo "</pre>";
    ?>
</body>
</html>