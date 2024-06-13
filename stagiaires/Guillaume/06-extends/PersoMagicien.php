<?php

class PersoMagicien extends PersoBase{
    // Propriétés (non héritées) - ajout
    # créer un getter et un setter
    protected ?int $magiePoint;

    // Propriétés écrasées (public ou protégées) - remplacement
    protected int $force = 50;

    // On ne peut pas l'écraser une propriété privée du parent !
    // public int|bool|null $alive = 5;

    // méthodes

    // Surcharge du constructeur on peut ajouter des éléments
    public function __construct(string $name, int $age, string $espece){
        // on garde le constructeur du parent
        parent::__construct($name,$age,$espece);
        // on ajoute ce que l'on souhaite au constructeur de l'enfant
        # création du setter et appel ici
        $this->setMagiePoint(100);
    }

    // getter de magiePoint
    public function getMagiePoint(): ?int
    {
        return $this->magiePoint;
    }

    // setter de magiePoint
    public function setMagiePoint(int $themagiePoint){
        $this->magiePoint = $themagiePoint;
    }

    
}