<?php
require_once('Controller/VoitureController.php');

$voitureController= new VoitureController();
$voitureController->index();

//ou

#(new VoitureContoller->index());
//static
#VoitureController::index();


//qu'est ce qu'il faire, liste location voiture (etat voiture, barre de recherche, bdd)





