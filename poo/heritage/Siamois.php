<?php
require_once 'Chat.php';

final class Siamois extends Chat
{



    public function decrire(){

        return $this->identifier().' de couleur '.$this->getCouleur().' aux yeux '.$this->couleurYeux;
    }


}