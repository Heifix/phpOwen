<?php
class AcheteurController{
    public function index(){
        $listVoiture = array(
            new Voiture('Citroen','C3',6000,1),
            new Voiture('Tesla','S',5999,2),
            new Voiture('Ford','Mustang Shelby GT500',6001,1),
        );

        $listAcheteurs = array(
            new Acheteur(1,"PELET","Fx"),
            new Acheteur(2,"BOUTET","Owen"),


        );

        include_once "View/voitureByIdView.php";

        
    }
}
#lste 3 voitures