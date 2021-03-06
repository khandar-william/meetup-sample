<?php

$min_need = array (
  'soldier' => 227,
  'archer' => 227,
  'scout' => 150,
  'thief' => 150,
  'healer' => 200,
  'warrior' => 150,
  'sniper' => 120,
  'sorcerer' => 200,
  'knight' => 150,
  'ninja' => 100,
  'alchemist' => 150,
  'temple knight' => 150,
  'cannoneer' => 90,
  'necromancer' => 120,
  'nightmare' => 156,
  'assassin' => 90,
  'cleric' => 155,
  'paladin' => 150,
  'meister' => 85,
  'summoner' => 120,
  'holy knight' => 100,
  'shadow knight' => 100,
  'priest' => 100,
  'royalguard' => 65,
  'wizard' => 45,
);
echo 'Min set level: '.array_sum($min_need)."\n";

class Model {
    private $a = 100;
    private $b = 200;
    
    public function sum() {
        return $this->a + $this->b;
    }
}

echo (new Model())->sum();