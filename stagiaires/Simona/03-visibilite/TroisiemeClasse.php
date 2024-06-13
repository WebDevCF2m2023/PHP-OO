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

    public $param1 = "un";
    private $param2 = "deux";
    protected $param3 = "trois";
 //il permet de pouvoir lire un parametre publique sans pouvoir le modifier
 public readonly int $param4;
    /*
    constantes
    */

    const CONST_1 = "yes";


    /*
methodes
*/

publique



}



