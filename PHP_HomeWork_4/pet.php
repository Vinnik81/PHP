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
                echo '1';
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
        $this->happiness = 100;
        $this->hunger = 100;
        $this->sleep = 100;
    }

    private function checkLimits() {
        $this->happiness = max(min($this->happiness,100), 0);
        $this->hunger = max(min($this->hunger,100), 0);
        $this->sleep = max(min($this->sleep,100), 0);

        // if (!$this->Isnormal && ($this->happiness <= 0 || $this->hunger <= 0 || $this->sleep <= 0)) {
        //     die("Game Over");
        // }
    }

    public function showAttributes() {
        echo "<h4>" ."Счастье: " . $this->happiness . "  " ."</h4>";
        echo "<h4>"."Сытость: " . $this->hunger . " "."</h4>" ;
        echo "<h4>" ."Сон: " . $this->sleep . " ". "</h4>";
        echo "Бессмертие: " . $this->Isnormal. "<br>";
    }

    public function isDead() {
        return !$this->Isnormal && ($this->happiness <= 0 || $this->hunger <= 0 || $this->sleep <= 0);
      }
}
?>