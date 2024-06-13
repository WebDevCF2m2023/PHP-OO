<?php

class PersOOOn {
    /*
     Propriétés -> équivalent variables
     */
    private string $especePerso;
    private string $nomPerso;
    protected ?string $infoPerso;
    protected ?int $xpPerso=0; // xp du personnage, peut être null ou int (?int)
    // équivalent depuis PHP 8.0 (Union type) : protected null|int $xpPerso;
    protected ?int $hpPerso;

    /*
    Constantes -> équivalent constantes
    */
    // Les espèces qui seront acceptées dans le jeu
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
    Méthodes -> équivalent fonctions
    */

        /*
         Méthode Magique : constructeur

         C'est une méthode publique qui est appelée lors de l'instanciation d'une classe
         donc l'utilisation du mot clef new.
         Elle permet de passer des paramètres lors de la création de l'instance
         */

        public function __construct(string $species2, string $name)
        {
            // on va utiliser les setters pour remplir les paramètres
            $this->setEspecePerso($species2);
            // setter pour le nom
            $this->setNomPerso($name);
            // setter pour l'HP
            $this->setHpPerso(1000);
            // setter pour les infos du Personnage
            $this->setInfoPerso("
            <h3>{$this->getNomPerso()} est un.e {$this->getEspecePerso()}</h3>
            ");

        }

        /*
        Setters (mutators)
        Ils permettent de modifier des propriétés, quelque-soit la visibilité (plus rare pour les public, sauf avec readonly), tout en vérifiant la validité des données reçues.
        Les setters sont toujours publiques (donc utilisable depuis l'extérieur de la classe et héritable)
        On les écrits avec le mot clef 'set' suivi du nom de l'attribut mis en majuscule
        $especePerso devient setEspecePerso() :
        */

        /*
            règles mise en place pour modifier $espacePerso
        */
        public function setEspecePerso(string $species): void// void signifie pas de retour (cette méthode est une procédure)
        {
            // si $species se touve dans la constante ESPECE_PERSO
            // qui est un tableau (utilisation de in_array)
            // self représente la class
            if(in_array($species,self::ESPECE_PERSO)){
                $this->especePerso = $species;
            }else{
                throw new Exception("Espèce inconnue !", 333);
            }
        }

        // setter de $nomPerso (protection + de 3 à 16 caractères)
        public function setNomPerso(string $theName): void
        {
            // on retire les tags puis les espaces avant et arrière
            $theName = trim(strip_tags($theName));
            // si $theName est plus petit que 3 caractères
            $nameLength = strlen($theName); // prise de longueur
            if($nameLength<3){
                throw new Exception("Le nom est trop court !", 334);
            }elseif($nameLength>16){
                throw new Exception("Le nom est trop long !",335);
            }
            $this->nomPerso = $theName;

        }

        // setter de $xpPerso (int positif)

        public function setXpPerso(int $xpPerso): void
        {
            if($xpPerso<0){
                throw new Exception("Seul un int positif est autorisé",336);
            }
            $this->xpPerso = $xpPerso;

        }

    
        // setter de $hpPerso
        public function setHpPerso(int $hpPerso): void
        {
            $this->hpPerso = $hpPerso;
        }

        // setter de $infoPerso
        public function setInfoPerso(string $infoPerso)
        {
            $this->infoPerso = $infoPerso;
        }

        /*
        Getters - accessors
        Permet de récupérer des propriétés généralement private ou protected
        en dehors de la classe.
        On utilise le nom de la propriété auquel on préfixe avec le mot clef
        get suivi de la première lettre en majuscule :
        pour $especePerso => getEspecePerso()
        */

        // getter de $especePerso
        public function getEspecePerso(): string
        {
            return $this->especePerso;
        }

        // getter de $nomPerso (string))
        public function getNomPerso(): string
        {
            return $this->nomPerso;
        }

        // getter de $xpPerso (null ou int)
        public function getHpPerso(): ?int
        {
            return $this->hpPerso;
        }

        // getter de $hpPerso (bool|null|int)

        public function getXpPerso(): ?int
        {
            return $this->xpPerso;
        }

        // getter de $infoPerso
        public function getInfoPerso(): ?string
        {
            return $this->infoPerso;
        }
    


    

}