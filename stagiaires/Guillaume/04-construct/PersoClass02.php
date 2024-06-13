<?php

class PersoClass02{
    // Propriétés
    protected string $name; // protected si, dans le doute ou sciemment, on veut avoir des héritiers
    protected int $hp;
    protected int $level=1;
    protected string $espece;
    

    // Constantes
    public const DE_DE_6 = 6;
    public const ESPECE_CHOICE = ["Humain",
                                     "Saiyan",
                                     "Elf",
                                     "Nain",
                                     "Cyborg",
                                    ];

    // Méthodes

        // Constructeur 
        // Le constructeur est une méthode magique qui permet lors de l'instanciation (avec le mot clef new) de passer des paramètres directement à l'instance de classe
        public function __construct(string $nom, string $espece)
        {
            // modification sans vérification de la propriété
            $this->name = $nom;
            // modification grâce à un setter (BP)
            $this->setEspece($espece);
        }

        // setter de espece
        public function setEspece(string $espece){
            if(in_array($espece, self::ESPECE_CHOICE)){
                $this->espece = $espece;
            }else{
                throw new Exception("Tu fais quoi là!");
            }
        }
}