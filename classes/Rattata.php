<?php
require_once __DIR__ . '/Pokemon.php';

class Rattata extends Pokemon {

  public function __construct(){
    parent::__construct('Rattata','Normal', 5, 35, 'Hyper Fang');
  }

  public function specialMove(){
    return [
      'name'=>$this->special,
      'desc'=>'A biting move that can increase attack focus (+1 level temp).'
    ];
  }

  public function train(string $trainingType, int $intensity){
    $result = parent::train($trainingType,$intensity);

    if(strtolower($trainingType)=='speed'){
      $result['after']['level'] += 1;
      $this->level += 1;
    }

    return $result;
  }
}
