<?php
// chargement du parent
require_once "PersoBase.php";
// chargement d'un enfant
require_once "PersoMagicien.php";
// chargement de l'enfant d'enfant
require_once "PersoMagicienNoire.php";

$persoBase = new PersoBase("Mike",47,"Nain","Noir");
$persoBase->setForce(110);
$persoBase->setAgilite(95);
echo "<p>Force: {$persoBase->getForce()} <br> Agilité : {$persoBase->getAgilite()}</p>";
$persoMagicien = new PersoMagicien("Lee",22,"Cyborg");
//$persoMagicien->setAlive(true);
try{
    $persoMagicienNoire = new PersoMagicienNoire("Emrah",30,"Humain","Nécromancien");
}catch(Exception $e){
    echo "Code : {$e->getCode()}<br>Message {$e->getMessage()}<br>";
}
//$persoMagicien->setAlive(true);

echo $persoBase->persoAvance();
echo "<br>";
echo $persoMagicien->persoAvance();
echo "<br>";
echo $persoMagicienNoire->persoAvance();

// la constante publique vient du parent, elle est héritée
var_dump(PersoMagicien::ESPECE_CHOICE);

var_dump($persoBase,$persoMagicien,$persoMagicienNoire);

$persoMagicienNoire->setMagieType("Sorcier");
var_dump($persoMagicienNoire);