<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3</title>
</head>
<body>
    <h1>Exercice 3</h1>
    <?php
    // Constantes : leur valeur ne change jamais
    define("TAUX_TVA", 20);
    define("DEVISE", "MAD");

    $prixUnitaireHT = 60;
    $quantite = 3;

    $totalHT = $prixUnitaireHT * $quantite;
    $montantTVA = $totalHT * TAUX_TVA / 100;
    $totalTTC = $totalHT + $montantTVA;

    // += ajoute 15 à la valeur existante
    $totalTTC += 15;

    echo "Total HT : " . $totalHT . " " . DEVISE . "<br>";
    echo "TVA (" . TAUX_TVA . " %) : " . $montantTVA . " " . DEVISE . "<br>";
    echo "Total TTC + livraison : " . $totalTTC . " " . DEVISE . "<br><br>";

    if (defined("TAUX_TVA")) {
        echo "La constante TAUX_TVA existe.";
    }
    ?>
</body>
</html>