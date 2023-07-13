<?php

abstract class Animal
{
    public function identifier():string
    {

        return 'je suis un animal';
    }


    abstract public function makeSound(): string;

}