<?php

require_once "PersOOn.php";
require_once "PersOOnReal.php";

$perso1 = "Pas encore de personnage";
$perso2 = "Pas encore de personnage 2";

// si on a cliqué sur envoyer
if(isset($_POST['especePerso'],$_POST['nomPerso'], $_POST['xpPerso'], $_POST['hpPerso'])){
    try{
        $perso1 = new PersOOn($_POST['especePerso'],$_POST['nomPerso'], (int)$_POST['xpPerso'], (int)$_POST['hpPerso']);
        $perso2 = new PersOOnReal($_POST['especePerso'],$_POST['nomPerso']."2", (int)$_POST['xpPerso'], (int)$_POST['hpPerso']);
    }catch(Exception $e){
        echo $e->getCode()." ".$e->getMessage();
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choix d'un PersOOn</title>
</head>
<body>
    <h1>Choix d'un PersOOn</h1>
    <form action="" method="POST" name="perso">
        <p>Utilisez un nom de minimum 3 et maximum 16 caractères</p>
        <input type="text" name="nomPerso" placeholder="Votre nom de personnage" required>
        <p>Choisissez votre espece</p>
        <select name="especePerso">
            <option value="nimporte">nimporte</option>
            <?php
                // on peut facilement lire une constante public depuis la classe
                // sans devoir l'instancier avec sont nom, puis ::, puis le nom de la
                // constante
                foreach(PersOOn::ESPECES as $item):
            ?>
            <option value="<?=$item?>"><?=$item?></option>
            <?php
                endforeach;
            ?>
        </select>
        <p>Choisissez votre quantité d'xp</p>
        <input type="number" name="xpPerso" placeholder="Votre quantité d'xp" required>
        <p>Choisissez votre quantité d'hp</p>
        <input type="number" name="hpPerso" placeholder="Votre quantité d'hp" required>
        <hr>
        <input type="submit" value="Créer le personnage" />
    </form>

    <h2>appel via les getters</h2>
    <?php
    if (gettype($perso1) == "string"){
      echo $perso1;
    }else{
      echo "espece: ".$perso1->getEspece()."<hr>";
      echo "nom: ".$perso1->getName()."<hr>";
      echo "xp: ".$perso1->getXp()."<hr>";
      echo "hp: ".$perso1->getHp()."<hr>";
    }
    ?>

    <h2>valeur POST</h2>
    <?php
      var_dump($_POST);
      echo "<hr>";
    ?>

    <h2>var_dump perso 1</h2>
    <?php
      var_dump($perso1);
    ?>

    <h2>var_dump perso 2</h2>
    <?php
      var_dump($perso2);
    ?>
    <h2>throw dice</h2>
    <?php
      if (gettype($perso2) != "string"){
        var_dump($perso2->throw_dice(PersOOnReal::SMALL_DICE, 5));
      }
    ?>

</body>
</html>
