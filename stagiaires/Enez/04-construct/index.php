<?php
require_once "PersOOn.php";

// création d'une instance (objet) de la classe Persoon
$perso1 = new PersOOn("Golum","Hobbit");
// attribution des  paramètres de gauche à droite (par défaut)
$perso2 = new PersOOn("Gogole","Humanoïde",null,80);
$perso3 = new PersOOn(273,555);
// on peut utiliser les arguments nommés depuis PHP 8.0
$perso4 = new PersOOn(hp:50,species:"Elfe",name:"Superman");


var_dump($perso1,$perso2,$perso3,$perso4);