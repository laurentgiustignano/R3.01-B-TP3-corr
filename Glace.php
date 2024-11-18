<?php

class Glace {
  private int $tarifParfum;
  private int $tarifTopping;
  private float $tarifCornet;
  private float $addition;

  public function __construct () {
    $this->tarifParfum = 2;
    $this->tarifTopping = 1;
    $this->tarifCornet = 0.5;
    $this->addition = 0;
  }

  public function getTarifCornet() : float {
    return $this->tarifCornet;
  }

  public function getTarifTopping() : int {
    return $this->tarifTopping;
  }

  public function getTarifParfum () : int {
    return $this->tarifParfum;
  }

}