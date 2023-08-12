<?php
class Pet {
    private $happiness;
    private $hunger;
    private $sleep;
    private $Isnormal;

    public function __construct() {
        $this->happiness = 50;
        $this->hunger = 50;
        $this->sleep = 50;
        $this->Isnormal = false;
    }

    public function decreaseAttributes() {
        if ($this->Isnormal == false) {
            $this->happiness--;
             $this->hunger--;
             $this->sleep--;
             $this->checkLimits();
        }
    }


    public function play() {
        $this->happiness += 10;
        $this->checkLimits();
    }

    public function feed() {
        $this->hunger += 10;
        $this->checkLimits();
    }

    public function sleep() {
        $this->sleep += 10;
        $this->checkLimits();
    }

    public function setIsnormal($Isnormal) {
        $this->Isnormal = $Isnormal;
    }

    private function checkLimits() {
        $this->happiness = max(min($this->happiness,100), 0);
        $this->hunger = max(min($this->hunger,100), 0);
        $this->sleep = max(min($this->sleep,100), 0);

        if (!$this->Isnormal && ($this->happiness == 0 || $this->hunger == 0 || $this->sleep == 0)) {
            die("Game Over");
        }
    }

    public function showAttributes() {
        $this->decreaseAttributes();
        echo "Счастье: " . $this->happiness . "<br>";
        echo "Сытость: " . $this->hunger . "<br>";
        echo "Сон: " . $this->sleep . "<br>";
        echo "Бессмертие: " . $this->Isnormal. "<br>";
    }
}
?>