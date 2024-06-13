<?php

class PersoWarrior extends PersoAbstract{

    // Propriétés d'un guerrier
    protected int $strength = 100;
    protected int $resistance = 100;
    protected int $agility = 80;

    // on a hérité du constructeur de PersoAbstract, on va le surcharger

    public function __construct(string $theName, string $theEspece)
    {
        // vient de la classe parente (PersoAbstract)
        parent::__construct($theName,$theEspece);

        // texte
        $text = "<h3>Création d'un ".self::class." de l'espèce {$this->getEspece()} nommé {$this->getName()}</h3>";

        // surcharge de la force
        $strength = $this->getStrength();
        $text .= "<p>Force de base : $strength + 3 dés de 6 faces : +";
        // lancé de 3 dés de 6.
        foreach (self::throwSmallDice(3) as $key => $value){
            $text = " dé $key : $value +";
            $strength += $value;
        }
        $text = substr($text,0,-1);
        $text .= " = $strength<br>";
        $this->setStrength($strength);

        // surcharge de la résistance
        $resistance = $this->getResistance();
        $text .= "<p>Résistance de base : $resistance + 3 dés de 6 faces : +";
        // lancé de 3 dés de 6.
        foreach (self::throwSmallDice(3) as $key => $value){
            $text = " dé $key : $value +";
            $text = substr($text,0,-1);
            $resistance += $value;
        }
        $text .= " = $resistance<br>";
        $this->setResistance($resistance);

        // surcharge de l'agilité
        $agilite = $this->getAgility();
        $text .= "<p>Agilité de base : $agilite + 2 dés de 6 faces : +";
        // lancé de 2 dés de 6.
        foreach (self::throwSmallDice(2) as $key => $value){
            $text = " dé $key : $value +";
            $text = substr($text,0,-1);
            $agilite += $value;
        }
        $text .= " = $agilite<br>";
        $this->setAgility($agilite);
        
    }

    /*
    Actions
    */
    /**
     * @throws \Random\RandomException
     */
    public function attack($enemy): string
    {

        // ATTAQUE
        $attackPoints = $this->getAgility();
        $text = "<h4>Attaque de {$this->getName()}</h4> <p>Agilité = $attackPoints<br>";
        // lancé de 3 dés de 20
        $throwDices = $this->throwBigDice(3);
        $text .= "3 Dés de 20 faces : ";
        $desPoints = 0;
        foreach ($throwDices as $key => $value){
            $desPoints += $value;
            $text .= "dé $key = $value - ";
        }
        $attackPoints += $desPoints;
        $text .="Total des dés = $desPoints<br>";
        $text .= "<br> Points d'attaques de {$this->getName()} : $attackPoints</p>";


        // défense de l'ennemi
        $defenseEnemy = $enemy->defence();

        return $text.$defenseEnemy["texte"]."<hr>";

    }

    // notre défense
    public function defence(): array
    {
        // DEFENCE
        $defencePoints = $this->getAgility();
        $text = "<h4>Défense de {$this->getName()}</h4><p>Agilité = $defencePoints<br>";
        // lancé de 3 dés de 20
        $throwDices = $this->throwBigDice(3);
        $text .= "3 Dés de 20 faces : ";
        $desPoints = 0;
        foreach ($throwDices as $key => $value){
            $desPoints += $value;
            $text .= "dé $key = $value - ";
        }
        $defencePoints += $desPoints;
        $text .="Total des dés = $desPoints<br>";
        $text .= "<br> Points de défense de {$this->getName()} : $defencePoints</p>";
        return(["points"=>$defencePoints, "texte"=>$text]);
    }

    public function getHealthPoint(): int
    {
        return $this->healthPoint;
    }

    public function setHealthPoint(int $health){
        $this->healthPoint = $health;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    


    public function getStrength() : int
    {
        return $this->strength;
    }

    protected function setStrength(int $strength)
    {
        $this->strength = $strength;
    }

    public function getResistance(): int
    {
        return $this->resistance;
    }


    protected function setResistance(int $resistance)
    {
        $this->resistance = $resistance;
    }

    public function getAgility(): int
    {
        return $this->agility;
    }

    protected function setAgility(int $agility)
    {
        $this->agility = $agility;
    }
}