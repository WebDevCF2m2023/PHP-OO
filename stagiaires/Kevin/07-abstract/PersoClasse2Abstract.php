<?php

abstract class PersoClasse2Abstract
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


    /*
     * Constantes
     */
    public const ESPECE_PERSO = [
        "Humain",
        "Elfe",
        "Nain",
        "Orc",
        "Hobbit",
        "Gobelin",
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
    }

    // Méthodes à déclarer dans les enfants
    abstract protected function initPerso();

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
        if(in_array($persoEspece,self::ESPECE_PERSO)){
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



}