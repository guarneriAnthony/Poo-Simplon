<?php


 abstract class Vehicle{
    protected string $fuelType;
    protected int $speedMax;
    protected int $speed;
    protected int $fuelMax;
    protected int $fuelActual;
    protected int $nbrWheel;

     /**
      * @param string $fuelType
      * @param int $speedMax
      * @param int $fuelMax
      * @param int $fuelActual
      * @param int $nbrWheel
      */
     public function __construct(string $fuelType, int $speedMax, int $fuelMax, int $fuelActual, int $nbrWheel)
     {
         $this->fuelType = $fuelType;
         $this->speedMax = $speedMax;
         $this->speed = 0;
         $this->fuelMax = $fuelMax;
         $this->fuelActual = $fuelActual;
         $this->nbrWheel = $nbrWheel;
     }

     /**
      * @return string
      */
     public function getFuelType(): string
     {
         return $this->fuelType;
     }

     /**
      * @param string $fuelType
      */
     public function setFuelType(string $fuelType): void
     {
         $this->fuelType = $fuelType;
     }

     /**
      * @return int
      */
     public function getSpeedMax(): int
     {
         return $this->speedMax;
     }

     /**
      * @param int $speedMax
      */
     public function setSpeedMax(int $speedMax): void
     {
         $this->speedMax = $speedMax;
     }

     /**
      * @return int
      */
     public function getSpeed(): int
     {
         return $this->speed;
     }

     /**
      * @param int $speed
      */
     public function setSpeed(int $speed): void
     {
         $this->speed = $speed;
     }

     /**
      * @return int
      */
     public function getFuelMax(): int
     {
         return $this->fuelMax;
     }

     /**
      * @param int $fuelMax
      */
     public function setFuelMax(int $fuelMax): void
     {
         $this->fuelMax = $fuelMax;
     }

     /**
      * @return int
      */
     public function getFuelActual(): int
     {
         return $this->fuelActual;
     }

     /**
      * @param int $fuelActual
      */
     public function setFuelActual(int $fuelActual): void
     {
         $this->fuelActual = $fuelActual;
     }

     /**
      * @return int
      */
     public function getNbrWheel(): int
     {
         return $this->nbrWheel;
     }

     /**
      * @param int $nbrWheel
      */
     public function setNbrWheel(int $nbrWheel): void
     {
         $this->nbrWheel = $nbrWheel;
     }



 }