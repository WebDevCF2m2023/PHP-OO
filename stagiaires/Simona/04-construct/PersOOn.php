<?php

class PersOOn {
//Propriétés -> variable
private string $especePerso;
private string $nomPerso;
protected ?int $xpPerso;//valeure xp du personnage, peut etre null ou int(?int == null)
//équivalent depuis PHP 8.0
//protected null|int $xpPerso;
protected bool|int|null $hpPerso;//si plus de deux types utilisation de "|"

//constantes
public const ESPECE_PERSO = [
    "Humain",
    "Elfe",
    "Nain",
    "Orc",
    "Hobbit",
    "Gobelin",
];

//Méthodes
  //méthode magique "constructeur"
  //c'est une methode publique qui est appelée lors d'une instantion d'une clase donc l'utilisation du mot clef "new", elle permet de passer des parametres lors de la creation de l'instance
  public function __construct(string $name, string $species,?int $xp = 0, bool|int|null $hp = 100){
    //on peut remplir imediatement les parametres
    $this->nomPerso = $name;
    $this->especePerso = $species;
    $this->xpPerso = $xp;
    $this->hpPerso = $hp;
  }

}