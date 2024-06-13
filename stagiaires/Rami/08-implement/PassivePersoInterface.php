<?php
// l'interface ne peut contenir que des méthodes publiques
interface PassivePersoInterface{
    // un perso peut être blessé
    public function isHurt();
    // un perso peut mourir
    public function isDie();
    // un perso peut gagner des points de xp
    public function winXP();
    
}