<?php
class VoitureController{
    public function index(){
        $listVoiture = VoiturePersistance::all();

        $listAcheteurs = AcheteurPersistance::all();

        include_once "View/Voiture/voitureView.php";
    }
}
#lste 3 voitures