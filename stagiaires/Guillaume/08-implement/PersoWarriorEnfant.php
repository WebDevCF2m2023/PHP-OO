<?php
// Ne pourra plus être héritée
final class PersoWarriorEnfant extends PersoWarrior{

    /* Méthode finale ne peut pas être modifiée
    public function isHurt(){
        return "oups";
    }
        */
    use PersoTrait;
    
}