<?php

class PersOOn {
  private string $espece;
  private string $nom;
  protected ?int $xp;
  protected null|bool|int $hp;

  public const ESPECES = [
    "Humain",
    "Elfe",
    "Nain",
    "Orc",
    "Hobbit",
    "Gobelin",
  ];

  public function __construct(string $species, string $name, ?int $xp, null|bool|int $hp) {
    $this->setEspece($species);
    $this->setName($name);
    if ($xp !== null)$this->setXp($xp);
    if ($hp !== null)$this->setHp($hp);
  }

  public function setEspece(string $name): void {
    if (in_array($name, self::ESPECES)){
      $this->espece = $name;
    }else {
      throw new Exception("Espece invalide");
    }
  }
  public function setName(string $name): void {
    if (preg_match('/^[a-zA-Z0-9 ]{3,16}$/', $name)){
      $this->nom = $name;
    }else {
      throw new Exception("Nom invalide");
    }
  }
  public function setXp(int $xp): void {
    if ($xp > 0){
      $this->xp = $xp;
    }else {
      throw new Exception("Quantité d'xp invalide");
    }
  }
  public function setHp(int|bool $hp): void {
    $this->hp = $hp;
  }

  public function getEspece(): string {
    return $this->espece;
  }
  public function getName(): string {
    return $this->nom;
  }
  public function getXp(): ?int {
    return $this->xp;
  }
  public function getHp(): null|bool|int {
    return $this->hp;
  }
}
