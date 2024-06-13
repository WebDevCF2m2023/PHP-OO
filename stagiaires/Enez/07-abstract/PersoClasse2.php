<?php
require_once 'PersoClasse2Abstract.php'; // Assuming the abstract class is defined in a separate file

class PersoClasse2 extends PersoClasse2Abstract
{
    public function __construct(string $name, string $espece)
    {
        parent::__construct($name, $espece);
        $this->initPerso();
    }

    protected function initPerso()
    {
        $this->setInfoPerso("info");
    }
}
?>
