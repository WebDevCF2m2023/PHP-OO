<?php

class PersOOnReal extends PersOOn {
  protected ?int $strength;
  protected ?int $ability;
  protected ?int $speed;

  // the stats for each species
  public const SPECIES_STATS = [
    "Humain"=>[
      "hp"=>100,
      "hp_dices"=>[self::SMALL_DICE, 3],
      "strength"=>120,
      "strength_dices"=>[self::SMALL_DICE, 2],
      "ability"=>130,
      "ability_dices"=>[self::SMALL_DICE, 2],
      "speed"=>120,
      "speed_dices"=>[self::SMALL_DICE, 2],
    ],
    "Elfe"=>[
      "hp"=>120,
      "hp_dices"=>[self::SMALL_DICE, 3],
      "strength"=>80,
      "strength_dices"=>[self::SMALL_DICE, 2],
      "ability"=>120,
      "ability_dices"=>[self::SMALL_DICE, 2],
      "speed"=>140,
      "speed_dices"=>[self::SMALL_DICE, 2],
    ],
    "Nain"=>[
      "hp"=>60,
      "hp_dices"=>[self::SMALL_DICE, 3],
      "strength"=>120,
      "strength_dices"=>[self::SMALL_DICE, 2],
      "ability"=>140,
      "ability_dices"=>[self::SMALL_DICE, 2],
      "speed"=>90,
      "speed_dices"=>[self::SMALL_DICE, 2],
    ],
    "Orc"=>[
      "hp"=>170,
      "hp_dices"=>[self::SMALL_DICE, 3],
      "strength"=>150,
      "strength_dices"=>[self::SMALL_DICE, 2],
      "ability"=>40,
      "ability_dices"=>[self::SMALL_DICE, 2],
      "speed"=>30,
      "speed_dices"=>[self::SMALL_DICE, 2],
    ],
    "Hobbit"=>[
      "hp"=>70,
      "hp_dices"=>[self::SMALL_DICE, 3],
      "strength"=>100,
      "strength_dices"=>[self::SMALL_DICE, 2],
      "ability"=>130,
      "ability_dices"=>[self::SMALL_DICE, 2],
      "speed"=>110,
      "speed_dices"=>[self::SMALL_DICE, 2],
    ],
    "Gobelin"=>[
      "hp"=>50,
      "hp_dices"=>[self::SMALL_DICE, 3],
      "strength"=>80,
      "strength_dices"=>[self::SMALL_DICE, 2],
      "ability"=>150,
      "ability_dices"=>[self::SMALL_DICE, 2],
      "speed"=>150,
      "speed_dices"=>[self::SMALL_DICE, 2],
    ],
  ];

  public function __construct(string $species, string $name, ?int $xp) {
    parent::__construct($species, $name, $xp);
    $hp_dices = self::SPECIES_STATS[$species]["hp_dices"];
    $hp_bonus = array_sum($this->throw_dice($hp_dices[0], $hp_dices[1]));
    $this->hp = self::SPECIES_STATS[$species]["hp"] + $hp_bonus;

    $strength_dices = self::SPECIES_STATS[$species]["strength_dices"];
    $strength_bonus = array_sum($this->throw_dice($strength_dices[0], $strength_dices[1]));
    $this->strength = self::SPECIES_STATS[$species]["strength"] + $strength_bonus;

    $ability_dices = self::SPECIES_STATS[$species]["ability_dices"];
    $ability_bonus = array_sum($this->throw_dice($ability_dices[0], $ability_dices[1]));
    $this->ability = self::SPECIES_STATS[$species]["ability"] + $ability_bonus;

    $speed_dices = self::SPECIES_STATS[$species]["speed_dices"];
    $speed_bonus = array_sum($this->throw_dice($speed_dices[0], $speed_dices[1]));
    $this->speed = self::SPECIES_STATS[$species]["speed"] + $speed_bonus;
  }

  public function throw_dice(int $dice_type=self::SMALL_DICE, int $nb_times=1):array {
    // get the number of faces of the dice
    if ($dice_type === self::SMALL_DICE){
      $dice = self::THROW_DICE_SMALL;
    }elseif ($dice_type === self::BIG_DICE){
      $dice = self::THROW_DICE_BIG;
    }else {
      throw Exception("dice type not valid");
    }

    $arr = [];
    for ($i=0;$i<$nb_times;$i++){
      $dice_result = rand(1, $dice);
      array_push($arr, $dice_result);
    }

    return $arr;
  }

  // getters
  public function getStrength():?int {
    return $this->strength;
  }
  public function getAbility():?int {
    return $this->ability;
  }
  public function getSpeed():?int {
    return $this->speed;
  }

  // setters
  public function setStrength(int $strength):self {
    $this->speed = $strength;
    return $this;
  }
  public function setAbility(int $ability):self {
    $this->speed = $ability;
    return $this;
  }
  public function setSpeed(int $speed):self {
    $this->speed = $speed;
    return $this;
  }
}
