<?php
require_once("Voiture.php");

class VoitureController{
    public function index(){
        $listVoiture = array(
            new Voiture('nom1','model1'),
            new Voiture('nom2','model2'),
            new Voiture('nom3','model3')
        );

    include_once "voitureView.php";
        
    }
}
#lste 3 voitures