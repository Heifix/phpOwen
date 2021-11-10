<?php
class AcheteurController{
    public function index($acheteur){
        $acheteur = AcheteurPersistance::getByAcheteur($acheteur);
        $listVoiture = VoiturePersistance::getByAcheteur($acheteur);

        include_once "View/Voiture/voitureView.php";
    }
}
#lste 3 voitures