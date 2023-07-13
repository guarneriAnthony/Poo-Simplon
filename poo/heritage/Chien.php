<?php
require_once 'Animal.php';


class Chien extends Animal
{

    public function makeSound(): string
    {
       return 'whouaf whouaf';
    }

    public function mangerFriandise(): string
    {

        return $this->makeSound();
    }



}