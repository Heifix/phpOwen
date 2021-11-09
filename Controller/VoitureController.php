<?php
class VoitureController{
    public function index(){
        $listVoiture = VoiturePersistance::all();

        $listAcheteurs = AcheteurPersistance::all();

        include_once "View/Voiture/voitureView.php";
    }

    public function voitureByAcheteur($id){
        $acheteur = AcheteurPersistance::getById($id);
        $listVoiture = VoiturePersistance::getByAcheteur($acheteur);

        include_once "View/Voiture/voitureView.php";
    }
}
#lste 3 voitures