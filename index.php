<?php 
require_once 'classe/Compte.php';
require_once 'classe/CompteCourant.php';
require_once 'classe/CompteEpargne.php';

//On instance le compte 
$compte1 = new CompteCourant('Benoit', 500, 200);
$compte1 ->setTitulaire('Robert');
$compte1 ->retirer(200);


var_dump($compte1);

$compteEpargne = new CompteEpargne('Benoit', 200, 10);

var_dump($compteEpargne);

$compteEpargne->verserInterets();
$compteEpargne->retirer(300);

var_dump($compteEpargne);

