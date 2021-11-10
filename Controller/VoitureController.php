<?php
class VoitureController{
    public function index(){
        $listVoitures = VoiturePersistance::all();

        include_once "View/Voiture/voitureView.php";
    }

    public function voitureById($id){
        $listVoitures = VoiturePersistance::getByAcheteur(AcheteurPersistance::getById($id));

        include_once "View/Voiture/voitureView.php";
    }
}
#lste 3 voitures