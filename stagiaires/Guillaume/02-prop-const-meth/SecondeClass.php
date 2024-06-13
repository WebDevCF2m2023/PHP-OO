<?php

class SecondeClass{

    /*
    Propriétés
    Ce sont des variables (même règle de nommage)
    internes à la classe
    La visibilité par défaut est publique
    */
    public $param1; // propriété vide
    public $param2 = "coucou"; // propriété avec valeur par défaut
    public int $param3; // propriété typée
    public int|float $param4; // propriété multi-type (PHP 8) int ou float
    public ?string $param5; // propriété multi-type (valide en PHP 7) null ou string

    /*
    Constantes
    Ce sont des variable non modifiables qui doivent être initialisées
    avec leur valeur. Les règles de nommage sont en UPPER_SNAKE_CASE
    La visibilité par défaut est publique
    */
    const CONSTANTE_1 = "constante publique 1";
    const CONSTANTE_2 = 4;

    /*
    Méthodes
    Ce sont des fonctions qui ont différentes visibilités
    La visibilité par défaut est publique
    On utilise le camelCase comme règle de nommage (+ règles des fonctions)
    */

    // publique par défaut (mauvaise pratique de ne pas l'indiquer)
    function bonjourLesAmies(){ 
        echo "Bonjour les ami.e.s"; // deuxième mauvaise pratique, il vaut mieux utiliser un return en sortie, sinon ceci est une procédure
    }

    // getter => renvoi le contenu d'un paramètre (qui ne serait en principe pas public), dans ce cas il DOIT être un string, sinon erreur fatale
    public function getParam2(): string 
    {
        // $this représente l'instance actuelle
        return $this->param2;
    }

}