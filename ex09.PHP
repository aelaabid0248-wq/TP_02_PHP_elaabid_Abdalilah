<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9</title>
</head>
<body>
    <h1>Exercice 9</h1>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];

    $somme = 0;
    $nbValides = 0;
    $meilleureNote = -1;
    $meilleurEtudiant = "";
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Résultat</th>
        </tr>
        <?php foreach ($notes as $nom => $note) {
            $somme += $note;

            if ($note >= 10) {
                $resultat = "Validé";
                $nbValides++;
            } else {
                $resultat = "Non validé";
            }

            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $nom;
            }
        ?>
        <tr>
            <td><?= $nom ?></td>
            <td><?= $note ?></td>
            <td><?= $resultat ?></td>
        </tr>
        <?php } ?>
    </table>

    <?php
    $moyenne = $somme / count($notes);
    ?>
    <p>Somme des notes : <?= $somme ?></p>
    <p>Moyenne de la classe : <?= $moyenne ?></p>
    <p>Étudiants validés : <?= $nbValides ?></p>
    <p>Meilleure note : <?= $meilleureNote ?> (<?= $meilleurEtudiant ?>)</p>
</body>
</html>