<?php

abstract class Perso2Classe2Abstract
{

    /*
     * Propriétés
     */

    // Propriétés héritables
    protected ?string $persoName;
    protected ?string $persoEspece;
    protected ?string $infoPerso;
    protected int $persoXP = 0;
    protected int $persoHP = 1000;
    protected int $persoAbility = 100;
    protected int $persoStrength = 80;
    protected int $persoSpeed = 10;


    /*
     * Constantes
     */
    public const ESPECE_PERSO = [
        "Humain"=>
        [
            "HP"=>[
                "big"=>5,
            ],
            "Ability"=>[
                "big"=>1,
                "small"=>2,
            ],
            "Strength"=>[
                "big"=>1,
                "small"=>1,
            ],
            "Speed"=>[
                "small"=>1,
            ],
        ],
        "Elfe"=>
        [   
            "HP"=>[
                "big"=>-10,
            ],
            "Ability"=>[
                "big"=>2,
                "small"=>1,
            ],
            "Strength"=>[
                "small"=>2,
            ],
            "Speed"=>[
                "small"=>2,
            ],
        ],
        "Nain"=>[
            "HP"=>[
                "small"=>3,
                //"big"=>-1,
            ],
            "Ability"=>[
                "big"=>-2,
                "small"=>1,
            ],
            "Strength"=>[
                "big"=>2,
            ],
            "Speed"=>[
                "small"=>-1,
            ],
        ],
    ];

    public const THROW_DICE_SMALL = 6;
    public const THROW_DICE_BIG = 20;

    /*
     * Méthodes
     */

    // Constructeur, devra être hérité
    /**
     * @throws Exception
     */
    public function __construct(string $name, string $espece)
    {
        $this->setPersoName($name);
        $this->setPersoEspece($espece);
        // on initialise le texte du personnage
        $this->setInfoPerso("<h3>Personnage créé : $name, de l'espèce $espece</h3>");
    }

    /*
     * Méthodes abstraites 
     * !!! à déclarer dans les enfants
     * 
    */

    // Pour initialiser le personnage (en utilisant les méthodes abstraites initHP, initAbility, initStrength, initSpeed )
    abstract protected function initPerso();
    // pour lancer $nb de dés
    // si $nb est négatif, on doit retirer la valeur 
    // des dés lancés, si positif ajouter
    // $value === "small" => self::THROW_DICE_SMALL
    // $value === "big" => self::THROW_DICE_BIG
    abstract protected function lanceDes(string $value, int $nb=1);

    abstract protected function initHP(string $espece);
    abstract protected function initAbility(string $espece);
    abstract protected function initStrength(string $espece);
    abstract protected function initSpeed(string $espece);


    // GETTERS et SETTERS hérités

    public function getPersoName(): ?string
    {
        return $this->persoName;
    }

    /**
     * @throws Exception
     */
    public function setPersoName(?string $persoName): void
    {
        // on retire les tags puis les espaces avant et arrière
        $theName = trim(strip_tags($persoName));
        // si $theName est plus petit que 3 caractères
        $nameLength = strlen($theName); // prise de longueur
        if($nameLength<3){
            throw new Exception("Le nom est trop court !", 333);
        }elseif($nameLength>16){
            throw new Exception("Le nom est trop long !",334);
        }
        $this->persoName = $persoName;
    }

    public function getPersoEspece(): ?string
    {
        return $this->persoEspece;
    }

    /**
     * @throws Exception
     */
    public function setPersoEspece(?string $persoEspece): void
    {
        if(array_key_exists($persoEspece,self::ESPECE_PERSO)){
            $this->persoEspece = $persoEspece;
        }else{
            throw new Exception("Espèce inconnue !", 335);
        }

    }

    public function getInfoPerso(): ?string
    {
        return $this->infoPerso;
    }

    public function setInfoPerso(?string $infoPerso): void
    {
        $this->infoPerso = $infoPerso;
    }

    public function getPersoXP(): int
    {
        return $this->persoXP;
    }

    public function setPersoXP(int $persoXP): void
    {
        $this->persoXP = $persoXP;
    }

    public function getPersoHP(): int
    {
        return $this->persoHP;
    }

    public function setPersoHP(int $persoHP): void
    {
        $this->persoHP = $persoHP;
    }

    public function getPersoAbility(): int
    {
        return $this->persoAbility;
    }

    public function setPersoAbility(int $persoAbility): void
    {
        $this->persoAbility = $persoAbility;
    }


    public function getPersoStrength(): int
    {
        return $this->persoStrength;
    }


    public function setPersoStrength(int $persoStrength): void
    {
        $this->persoStrength = $persoStrength;
    }


    public function getPersoSpeed(): int
    {
        return $this->persoSpeed;
    }


    public function setPersoSpeed(int $persoSpeed): void
    {
        $this->persoSpeed = $persoSpeed;
    }
}