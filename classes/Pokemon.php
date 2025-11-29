<?php
abstract class Pokemon {
  protected $name;
  protected $type;
  protected $level;
  protected $hp;
  protected $maxHp;
  protected $special;

  public function __construct($name, $type, $level, $hp, $special){
    $this->name=$name; 
    $this->type=$type; 
    $this->level=$level;
    $this->hp=$hp; 
    $this->maxHp=$hp; 
    $this->special=$special;
  }

  public function getInfo(){
    return [
      'name'=>$this->name,
      'type'=>$this->type,
      'level'=>$this->level,
      'hp'=>$this->hp,
      'special'=>$this->special
    ];
  }

  abstract public function specialMove();

  public function train(string $trainingType, int $intensity){
    $levelGain = intdiv($intensity, 10);
    $hpGain = (int)ceil($intensity * 0.5) + $levelGain*2;

    $before = ['level'=>$this->level,'hp'=>$this->hp];

    $this->level += $levelGain;
    $this->hp = min($this->maxHp + 50, $this->hp + $hpGain);

    $after = ['level'=>$this->level,'hp'=>$this->hp];

    return [
      'before'=>$before,
      'after'=>$after,
      'levelGain'=>$levelGain,
      'hpGain'=>$hpGain
    ];
  }
}
