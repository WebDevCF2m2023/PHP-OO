<?php

class PersOOn {
    /*
     Propriétés -> équivalent variables
     */
    private string $especePerso;
    private string $nomPerso;
    protected ?int $xpPerso; // xp du personnage, peut être null ou int (?int)
    // équivalent depuis PHP 8.0 (Union type) : protected null|int $xpPerso;
    protected null|bool|int $hpPerso; // si plus de 2 types, utilisation des pipes

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

    /*
    Méthodes -> équivalent fonctions
    */

        /*
         Méthode Magique : constructeur

         C'est une méthode publique qui est appelée lors de l'instanciation d'une classe
         donc l'utilisation du mot clef new.
         Elle permet de passer des paramètres lors de la création de l'instance
         */

        public function __construct(string $name, string $species, ?int $xp = 0, null|bool|int $hp = 100)
        {
            // on peut remplir immédiatement les paramètres (mauvaise pratique)
            $this->nomPerso = $name;
            $this->especePerso = $species;
            $this->xpPerso = $xp;
            $this->hpPerso = $hp;
        }

}