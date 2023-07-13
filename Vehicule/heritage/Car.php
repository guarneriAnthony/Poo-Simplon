<?php

require_once 'Vehicle.php';
class Car extends Vehicle {
    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }
}