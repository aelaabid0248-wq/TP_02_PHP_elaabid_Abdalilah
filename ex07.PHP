<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7</title>
</head>
<body>
    <h1>Exercice 7</h1>

    <section>
        <h2>Table de multiplication</h2>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            echo $nombre . " × " . $i . " = " . ($nombre * $i) . "<br>";
        }
        ?>
    </section>

    <section>
        <h2>Pyramide</h2>
        <pre><?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($etoile = 1; $etoile <= $ligne; $etoile++) {
                echo "*";
            }
            echo "\n";
        }
        ?></pre>
    </section>
</body>
</html>