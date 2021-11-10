<?php

class VoiturePersistance {
    public static function all() {
        return array(
            new Voiture('Citroen','C3',6000,AcheteurPersistance::getById(1)),
            new Voiture('Tesla','S',5999,AcheteurPersistance::getById(2)),
            new Voiture('Ford','Mustang Shelby GT500',6001,AcheteurPersistance::getById(1)),
            new Voiture('Fiat','Putot',6001,AcheteurPersistance::getById(1)),
        );
    }

    public static function getByAcheteur($unAcheteur) {
        $list = self::all();
        $listVoitures = array();
        foreach($list as $voiture){
            if($voiture->acheteur->id == $unAcheteur->id){
                $listVoitures[] = $voiture;
            }
        }
        return $listVoitures;
    }
}//$voiture->acheteur->id