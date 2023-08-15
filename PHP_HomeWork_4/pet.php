<?php
session_start();
class Pet  {
    private $happiness;
    private $hunger;
    private $sleep;
    private $Isnormal;

    public function __construct() {
        $this->happiness = 50.0;
        $this->hunger = 50;
        $this->sleep = 50;
        $this->Isnormal;
    }

    public function decreaseAttributes() {
$currentTime = time();
        if ($this->Isnormal == false) {
            
             if ($this->sleep > 0 || $this->hunger > 0 || $this->happiness > 0) {
                if (!isset($_SESSION['last_update_time'])) {
                    $_SESSION['last_update_time'] = $currentTime;
                }
                else {
                    $lastUpdateTime = $_SESSION['last_update_time'];
                    if ($currentTime - $lastUpdateTime >= 60) {
                            
                                $this->happiness--;
                                $this->hunger--;
                                $this->sleep--;
                                sleep(1);
                        $_SESSION['last_update_time'] = $currentTime;
                    }
                }
             }
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

    public function sleepy() {
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

        if (!$this->Isnormal && ($this->happiness <= 0 || $this->hunger <= 0 || $this->sleep <= 0)) {
            echo 'Game Over';
        }
    }

    public function showAttributes() {
        echo "<h4>" ."Счастье: " . $this->happiness . "  " ."</h4>";
        echo "<h4>"."Сытость: " . $this->hunger . " "."</h4>" ;
        echo "<h4>" ."Сон: " . $this->sleep . " ". "</h4>";
        echo "Бессмертие: " . $this->Isnormal. "<br>";
    }
}
?>