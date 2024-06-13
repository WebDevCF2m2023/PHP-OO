<?php
class TroisiemeClasse{
    /*
    Paramètres

    public = peut être lue/modifiée en dehors 
     de la classe (et dedans, ainsi que dans les héritiers)

    protected = ne peut être lue/modifiée en dehors 
    de la classe, mais peut l'être dans la classe et 
    ses enfants

    private = ne peut être lue/modifiée en dehors 
    de la classe, mais peut l'être dans la classe elle-même

    Les bonnes pratiques font que les paramètres sont généralement en private (si il est inutile d'hériter cette classe) ou protected (si on veut hériter, ou utile d'hériter)
    */

    public  $param1 = "un"; // pas de protections depuis l'extérieur
    private string $param2 = "deux";
    protected string $param3 = "trois";
    // à partir de PHP 8.1 on peut utiliser le readonly :
    // Il permet de pouvoir lire un paramètre public, sans pouvoir le modifier
    // il doit être déclaré avec son type, et ne peut avoir de valeur par défaut.
    public readonly int $param4;

    /*
    constantes
    */

    const CONST_1 = "yes";

    /*
    Méthodes
    */

    /*
    GETTERS (Accessors)
    ce sont des méthodes publiques qui vont
    Permettre de récupérer la valeur d'un paramètre privé ou protégé
    */
    public function getParam2(): string
    {
        // on renvoie le paramètre private
        // ! le getter doit être créé dans le fichier 
        // où se trouve le paramètre private
        return $this->param2;
    }

    public function getParam3(): string
    {
        // on renvoie le paramètre protected
        // ! le getter pourrait être créé dans un enfant 
        // (l'enfant peut acceder à $param3)
        return $this->param3;
    }

    /*
    SETTERS ou (Mutators)
    Les setters permettent de modifier un paramètre
    private ou protected (le public également, mais peut utilisé sans readonly)
    en vérifiant la validité des valeurs souhaitées
    */

    public function setParam2(string $p2): void
    {
        // ! le setter doit être créé dans le fichier 
        // où se trouve le paramètre private
        // protection contre les tags et les espaces avant et arrière
        $p2 = strip_tags(trim($p2));
        // on veut que $param2 et au minimum 2 caractères
        if(strlen($p2)>=2){
            // on lui attribue la valeur
            $this->param2 = $p2;
        }else{
            throw new Exception("Il faut au minimum 2 caractères");
        }
    }

    // peut être créé dans un enfant car $param3 est protected
    public function setParam3(string $param3): void
    {
        // protection contre les tags et les espaces avant et arrière
        $param3 = strip_tags(trim($param3));
        // on veut que $param2 et au minimum 2 caractères
        if(strlen($param3)>=2){
            // on lui attribue la valeur
            $this->param3 = $param3;
        }else{
            throw new Exception("Il faut au minimum 2 caractères");
        }
    }

    // fonction qui permet d'initialiser le $param4
    public function initParam4()
    {
        $this->param4 = "25";
    }

}