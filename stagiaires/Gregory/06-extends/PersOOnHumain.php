<?php

class PersOOnHumain extends PersOOnReal {
  public function __construct(string $name, ?int $xp) {
    parent::__construct("Humain", $name, $xp);
  }
}
