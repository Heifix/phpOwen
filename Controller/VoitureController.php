<?php
require_once("Model/Voiture.php");

class VoitureController{
    public function index(){
        $listVoiture = array(
            new Voiture('nom1','model1',6000),
            new Voiture('nom2','model2',5999),
            new Voiture('nom3','model3',6001)
        );
        
        var_dump($listVoiture);
        include_once "View/voitureView.php";
        
    }
}
#lste 3 voitures