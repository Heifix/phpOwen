<?php
class VoitureController{
    public function index(){
        $listVoiture = VoiturePersistance::all();

        $listAcheteurs = AcheteurPersistance::all();

        include_once "View/Voiture/voitureView.php";
    }

    public function voitureById($id){

        $acheteur = AcheteurPersistance::getById($id);
        $listVoiture = VoiturePersistance::getByAcheteur($acheteur);
        foreach($listVoiture as $voiture){
        }
        include_once "View/Voiture/voitureView.php";
    }
}
#lste 3 voitures