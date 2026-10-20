<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat GET</title>
</head>
<body>
    <h1>Résultat GET</h1>
    <?php
    if (!isset($_GET["nom"], $_GET["prenom"], $_GET["groupe"])) {
        echo "Aucune donnée reçue. Veuillez remplir le formulaire.";
    } else {
        $nom = trim($_GET["nom"]);
        $prenom = trim($_GET["prenom"]);
        $groupe = trim($_GET["groupe"]);

        if ($nom === "" || $prenom === "" || $groupe === "") {
            echo "Formulaire incomplet : tous les champs sont obligatoires.";
        } else {
            $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
            echo "Bienvenue " . $prenom . " " . $nom . ", groupe " . $groupe . ".";
        }
    }
    ?>
    <p><a href="ex10_get.html">Retour au formulaire</a></p>
</body>
</html>