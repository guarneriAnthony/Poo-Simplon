<?php

require_once 'Chat.php';
require_once 'Chien.php';
require_once 'Siamois.php';


$chat=new Chat('noir', 'vert');

echo $chat instanceof Animal;
echo '<br>';
echo $chat instanceof Chat;
echo '<br>';
echo $chat ->identifier();

echo '<br>';
$siamois=new Siamois('tigré', 'bleu');
echo $siamois->decrire();
