<?php
class AcheteurController{
    public function index($id){
        $acheteur = AcheteurPersistance::getById($id);
        $listVoiture = VoiturePersistance::getByAcheteur($acheteur);

        include_once "View/Voiture/voitureView.php";

        
    }
}
#lste 3 voitures