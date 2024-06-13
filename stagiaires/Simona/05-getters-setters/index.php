<?php

require_once "PersOOOn.php";

$perso1 = "Pas encore de personnage";
$errors = [];

// si on a cliqué sur envoyer
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Curățare și validare intrări
    $nomPerso = trim($_POST['nomPerso']);
    $especePerso = trim($_POST['especePerso']);
    $xpPerso = trim($_POST['xpPerso']);
    $hpPerso = trim($_POST['hpPerso']);

    if (strlen($nomPerso) < 3 || strlen($nomPerso) > 16) {
        $errors[] = "Le nom doit avoir entre 3 et 16 caractères.";
    }

    if (!in_array($especePerso, PersOOOn::ESPECE_PERSO) && $especePerso !== 'nimporte') {
        $errors[] = "L'espèce choisie est invalide.";
    }

    if (!is_numeric($xpPerso) || $xpPerso < 0) {
        $errors[] = "XP doit être un număr pozitiv.";
    }

    if (!is_numeric($hpPerso) || $hpPerso < 0) {
        $errors[] = "HP doit être un număr pozitiv.";
    }

    if (empty($errors)) {
        try {
            $perso1 = new PersOOOn(
                species2: $especePerso,
                name: $nomPerso,
                xp: (int)$xpPerso,
                hp: (int)$hpPerso
            );
        } catch (Exception $e) {
            $errors[] = $e->getCode() . " " . $e->getMessage();
        }
    }
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix d'un PersOOOn</title>
</head>
<body>
    <h1>Choix d'un PersOOOn</h1>
    <form action="" method="POST" name="perso">
        <p>Utilisez un nom de minimum 3 et maximum 16 caractères</p>
        <input type="text" name="nomPerso" placeholder="Votre nom de personnage" required value="<?= htmlspecialchars($nomPerso ?? '') ?>">
        <p>Choisissez votre espece</p>
        <select name="especePerso">
            <option value="nimporte">nimporte</option>
            <?php
                foreach (PersOOOn::ESPECE_PERSO as $item):
            ?>
            <option value="<?= htmlspecialchars($item) ?>" <?= (isset($especePerso) && $especePerso === $item) ? 'selected' : '' ?>><?= htmlspecialchars($item) ?></option>
            <?php
                endforeach;
            ?>
        </select>
        <p>Entrez votre XP</p>
        <input type="number" name="xpPerso" placeholder="Votre XP" required value="<?= htmlspecialchars($xpPerso ?? '') ?>">
        <p>Entrez vos HP</p>
        <input type="number" name="hpPerso" placeholder="Votre HP" required value="<?= htmlspecialchars($hpPerso ?? '') ?>">
        <input type="submit" value="Créer le personnage">
    </form>
    <?php
    if (!empty($errors)) {
        echo '<ul>';
        foreach ($errors as $error) {
            echo '<li>' . htmlspecialchars($error) . '</li>';
        }
        echo '</ul>';
    }

    if (is_object($perso1)) {
        echo $perso1->getEspecePerso();
    }
    var_dump($_POST, $perso1);
    
?>
</body>
</html>