<?php

class PersOOOReal extends PersOOOn{

    // on peut écraser une propriété du parent si protected ou public
    // ! si typé dans le parent, on doit garder le typage !
    protected ?int $xpPerso=0;
    // nouvelles propriétés
    // propriétées protégées
    protected ?int $force=100;
    protected ?int $habilete=100;
    protected ?int $vitesse=100;
    

    // on peut surcharger une méthode enfant
    public function __construct(string $species2, string $name)
        {
            // on récupère le constructeur du parent (PersOOOn) qui va donc être exécuté
            // lors de l'instanciation de PersOOOReal
            parent::__construct($species2,$name);
            // on ajoute nos besoins
            $this->initPerso();

        }

    /*
    
    Initialisation d'un personnage suivant son genre :
    "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",

        setHpPerso
        setForce
        setHabilite
        setVitesse
    */

    protected function initPerso(){
        // récupération de la santé de base
        $sante = $this->getHpPerso();
        // récupération du texte du personnage
        $texte = $this->getInfoPerso();
        

        switch($this->getEspecePerso()){
            case "Humain":
                $this->initHumain($sante,$texte);
                break;
        }
    }

    protected function initHumain($sante,$texte): void
    {
        /*
        HP de l'humain
        */
        $this->initHumainHP($sante,$texte);
        $texte = $this->getInfoPerso();
        /*
        Force de l'humain
        */
        $this->initHumainForce($texte);
        
    }

    private function initHumainHP($sante,$texte):void
    {
        // on va lancer 2 dés de 20 pour la santé de l'humain
        $des = $this->lanceGrandDes(2);
        // on ajoute au texte la santé de base
        $texte .= "<p><b>HP</b> : $sante de base + 2 dés de 20 : ";

        $totalDe = 0;
        // tant qu'on a lancé des dés
        foreach($des as $key => $value){
            $totalDe += $value;
            $texte .= "dé($key) => $value + ";
        }
        // suppression des 2 derniers caractères
        $texte = substr($texte,0,-2);
        $sante +=  $totalDe;
        $texte .= " Total des dés = $totalDe pour un total de <b>$sante</b></p>";
        // on va afficher
        $this->setHpPerso($sante);
        $this->setInfoPerso($texte);

    }

    private function initHumainForce($texte):void
    {
        $force = $this->getForce();
        // on va lancer 3 dés de 6 pour la force de l'humain
        $des = $this->lancePetitDes(3);
        // on ajoute au texte la santé de base
        $texte .= "<p><b>Force</b> : $force de base + 3 dés de 6 : ";

        $totalDe = 0;
        // tant qu'on a lancé des dés
        foreach($des as $key => $value){
            $totalDe += $value;
            $texte .= "dé($key) => $value + ";
        }
        // suppression des 2 derniers caractères
        $texte = substr($texte,0,-2);
        $force +=  $totalDe;
        $texte .= " Total des dés = $totalDe pour un total de <b>$force</b></p>";
        // on va afficher
        $this->setForce($force);
        $this->setInfoPerso($texte);
    }

    /*

    Lancés de dés

    */
    public function lancePetitDes($nb = 1): array
    {
        $lance = array();
        for($i=1;$i<=$nb;$i++){
            $lance[$i] = mt_rand(1,self::THROW_DICE_SMALL);
        }

        return $lance;
    }

    public function lanceGrandDes($nb = 1): array
    {
        $lance = array();
        for($i=1;$i<=$nb;$i++){
            $lance[$i] = mt_rand(1,self::THROW_DICE_BIG);
        }

        return $lance;
    }

    /*
    GETTERS AND SETTERS
    */

    public function getForce():?int
    {
        return $this->force;
    }

    public function setForce(int $force):void
    {
        $this->force = $force;

    }

    public function getHabilete():?int
    {
        return $this->habilete;
    }

    public function setHabilete(int $habilete):void
    {
        $this->habilete = $habilete;
    }

    public function getVitesse():?int
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse)
    {
        $this->vitesse = $vitesse;
    }

}