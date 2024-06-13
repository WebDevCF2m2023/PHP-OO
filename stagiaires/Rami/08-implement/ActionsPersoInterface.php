<?php
// l'interface ne peut contenir que des méthodes publiques
interface ActionsPersoInterface{
    // un perso doit attaquer
    public function attack($enemy): string;
    // un perso doit se défendre
    public function defence(): array;
    
}