<?php
class PersOOOnMagicien extends PersOOOReal{

    protected string $magiePersoName;
    protected bool $magiePerso;

    /**
     * $magie : true == mage blanc , false == mage noir
     */
    public function __construct(string $name, string $spacies, bool $magie = true)
    {
        parent::__construct(name: $name, species2: $spacies);
        $this->magiePersoName = $magie ? "Magicien Blanc" : "Magicien Noir";
        $text = $this->getInfoPerso();
        $text .= "<h4>{$this->getNomPerso()} est un {$this->magiePersoName}</h4>";
        $this->setInfoPerso($text);
    }

    public function getMagiePerso()
    {
        return $this->magiePerso;
    }

    public function setMagiePerso($magiePerso)
    {
        $this->magiePerso = $magiePerso;
    }

    public function getMagiePersoName()
    {
        return $this->magiePersoName;
    }

    public function setMagiePersoName($magiePersoName)
    {
        $this->magiePersoName = $magiePersoName;
    }
}