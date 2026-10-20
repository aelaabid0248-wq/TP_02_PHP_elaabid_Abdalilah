<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Résultat POST</title>
</head>
<body>
    <h1>Résultat POST</h1>
    <?php
    if (!isset($_POST["nom"], $_POST["prenom"], $_POST["groupe"])) {
        echo "Aucune donnée reçue. Veuillez remplir le formulaire.";
    } else {
        $nom = trim($_POST["nom"]);
        $prenom = trim($_POST["prenom"]);
        $groupe = trim($_POST["groupe"]);

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
    <p><a href="ex10_post.html">Retour au formulaire</a></p>
</body>
</html>