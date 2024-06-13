<?php

class PersoClasse2 extends PersoClasse2Abstract {
  public function __construct(string $name, string $espece){
    parent::__construct($name, $espece);
  }

    // Méthodes à déclarer dans les enfants
  protected function initPerso(){
  }
}
