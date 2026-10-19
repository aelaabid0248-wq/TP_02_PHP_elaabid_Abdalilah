<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2</title>
</head>
<body>
    <h1>Exercice 2</h1>
    <?php
    $nom = "elaabid";
    $prenom = "abdelilah";
    $age = 18;
    $formation = "IAP";

    // Concaténation avec le point
    $phrase = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans, formation " . $formation . ". ";

    // .= ajoute du texte à la fin de la variable
    $phrase .= "J'apprends PHP";

    echo $phrase . "<br><br>";

    $note = 12;
    $Note = 16;
    echo "note = " . $note . "<br>";
    echo "Note = " . $Note . "<br>";
    ?>
</body>
</html>