<?php
require_once 'PersOOn.php';
//on peut utiliser des arguments nommés de gauche a droit
$perso1 = new PersOOn("Golum","Hobbit");
$perso2 = new PersOOn("Gogole","Humanoide");
$perso3 = new PersOOn(555,273);
//on peut utiliser des arguments nommés depuis php 8.0
$perso4 = new PersOOn(hp:50,species:"Elfe",name:"Superman");