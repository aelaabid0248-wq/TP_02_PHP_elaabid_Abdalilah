<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
</head>
<body>
    <h1>Exercice 5</h1>
    <?php
    $moyenne = 10;

    echo "Moyenne : " . $moyenne . "<br>";

    if ($moyenne < 0 || $moyenne > 20) {
        echo "Note invalide";
    } elseif ($moyenne < 10) {
        echo "Non validé";
    } elseif ($moyenne < 12) {
        echo "Passable";
    } elseif ($moyenne < 14) {
        echo "Assez bien";
    } elseif ($moyenne < 16) {
        echo "Bien";
    } else {
        echo "Très bien";
    }
    ?>
</body>
</html>