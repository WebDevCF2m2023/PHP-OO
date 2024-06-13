<?php

class PersoMagicienNoire extends PersoMagicien{
    // Propriétés (non héritées) - ajout
    # créer un getter et un setter
    protected ?string $magieType;

    // Propriétés écrasées (public ou protégées) - remplacement
    protected int $force = 60;

    // On ne peut pas l'écraser une propriété privée du parent !
    // public int|bool|null $alive = 5;

    // constantes

    // $magieType ne peut être que Nécromancien => magiePoint : 110 - Voodoo : 90
    public const MAGIE_NOIRE = [
        "Nécromancien",
        "Voodoo",
        "Sorcier",
    ];

    // méthodes

    // Surcharge du constructeur on peut ajouter des éléments
    public function __construct(string $name, int $age, string $espece, string $magieType="Voodoo"){
        // on garde le constructeur du parent
        parent::__construct($name,$age,$espece);
        // on ajoute ce que l'on souhaite au constructeur de l'enfant
        # création du setter et appel ici
        $this->setMagieType($magieType);


    }

    // création du setter de magieType
    public function setMagieType(string $themagieType): void
    {
        if(in_array($themagieType, self::MAGIE_NOIRE)){
            $this->magieType = $themagieType;
            $this->setMagiePointByType($this->magieType);
        }else{
            throw new Exception("Type de Magicien noir inexistant ! Vous devez choisir entre {$this->viewMagieType()}",341);
        }
    }

    private function setMagiePointByType($type){
        if($type==="Nécromancien"){
            $this->setMagiePoint(110);
        }elseif($type==="Voodoo"){
            $this->setMagiePoint(90);
        }else{
            $this->setMagiePoint(100);
        }
    }

    private function viewMagieType(): string
    {
        $sortie = "";
        // tant qu'on a des types de magiciens
        foreach(self::MAGIE_NOIRE as $item){
            $sortie .= "$item, ";
        }
        // on retire les 2 derniers caractères (", " est inutile en fin de ligne)
        return substr($sortie,0,-2);
    }

    
}