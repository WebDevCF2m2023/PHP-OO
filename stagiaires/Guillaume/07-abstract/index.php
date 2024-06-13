<?php
require_once "PersoAbstract.php";
require_once "PersoWarrior.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>class abstract</title>
</head>
<body>
    <h1>class abstract</h1>
    <p>Une classe abstraite ne peut être instanciée, elle va servir de modèle pour les classes enfants</p><p>On peut hériter des propriétées ou méthodes non abtraites.</p>
    <code>//$perso = new PersoAbstract();</code>
    <p>On peut par contre afficher une constante publique</p>
    <code>var_dump(PersoAbstract::ESPECE_CHOICE);</code>
    <?php
    //$perso = new PersoAbstract();
    var_dump(PersoAbstract::ESPECE_CHOICE);
    ?>
    <h3>Un héritier doit créer les méthodes abstaites</h3>
    <code>$persoWarrior1 = new PersoWarrior("Luc");
    $persoWarrior1->setHealthPoint(1000);
    echo $persoWarrior1->getHealthPoint();
    </code><br>
    <?php
    $persoWarrior1 = new PersoWarrior("Lee","Humain");
    $persoWarrior2 = new PersoWarrior("Emrah","Cyborg");
    //$persoWarrior1->setHealthPoint(1000);
    //echo $persoWarrior1->getHealthPoint();
    var_dump($persoWarrior1,$persoWarrior2);

    echo $persoWarrior1->attack($persoWarrior2)."<br>";
    echo $persoWarrior2->attack($persoWarrior1)."<br>";
    echo $persoWarrior1->attack($persoWarrior2)."<br>";
    echo $persoWarrior2->attack($persoWarrior1)."<br>";
    var_dump($persoWarrior1,$persoWarrior2);
    ?>
</body>
</html>
<?php

