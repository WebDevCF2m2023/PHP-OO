<?php

class PersOOOMagicien extends PersOOOReal{


    protected string $magiePersoName;


    // on écrase le constructeur parent
    // Magie true => Magicien blanc
    // Magie false => Magicien noir
    public function __construct(string $name, string $species, bool $magie)
    {
        // on récupère le constructeur du parent (lui-même hérité)
        parent::__construct($species, $name);

        // ternaire qui permet de faire
        /* 
        if($magie===true){
            $this->magiePersoName = "Magicien Blanc" ;
        }else{
            $this->magiePersoName = "Magicien Noir" ;
        }
        */
        $this->magiePersoName = $magie===true ? "Magicien Blanc" : "Magicien Noir";
        // récupération du texte d'info
        $text = $this->getInfoPerso();
        $text .= "<h4>{$this->getNomPerso()} est un {$this->magiePersoName}</h4>";
        // mise à jour des infos du personnage
        $this->setInfoPerso($text);

    }


}