<?php
require_once 'Animal.php';

class Chat extends Animal
{


    private string $couleur;

    protected string $couleurYeux;

    /**
     * @param string $couleur
     * @param string $couleurYeux
     */
    public function __construct(string $couleur, string $couleurYeux)
    {
        $this->setCouleur($couleur)->setCouleurYeux($couleurYeux);
    }

    public function identifier(): string
    {
        return parent::identifier().' et je suis un chat';
    }


    /**
     * @return string
     */
    public function getCouleur(): string
    {
        return $this->couleur;
    }

    /**
     * @param string $couleur
     * @return Chat
     */
    public function setCouleur(string $couleur): Chat
    {
        $this->couleur = $couleur;
        return $this;
    }

    /**
     * @return string
     */
    public function getCouleurYeux(): string
    {
        return $this->couleurYeux;
    }

    /**
     * @param string $couleurYeux
     * @return Chat
     */
    public function setCouleurYeux(string $couleurYeux): Chat
    {
        $this->couleurYeux = $couleurYeux;
        return $this;
    }




    public function makeSound(): string
    {
        return 'Miaou miaou';
    }

}