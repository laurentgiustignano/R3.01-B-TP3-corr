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

  public function ajoutParfum ($parfum) : void {
    $this->addition += $this->getTarifParfum ($parfum);
  }

  public function getTarifParfum (string $parfum = null) : int {
    if($parfum === "Vanille")
      return $this->tarifParfum + 1;
    return $this->tarifParfum;
  }

  public function getTarifTopping () : int {
    return $this->tarifTopping;
  }

  public function getTarifCornet () : float {
    return $this->tarifCornet;
  }

  public function ajoutTopping () : void {
    $this->addition += $this->getTarifTopping ();
  }

  public function ajoutCornet () : void {
    $this->addition += $this->getTarifCornet ();
  }

  public function getAddition () : float {
    return $this->addition;
  }
}