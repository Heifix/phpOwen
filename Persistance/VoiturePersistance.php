<?php

class VoiturePersistance {
    public static function all() {
        return array(
            new Voiture('Citroen','C3',6000,1),
            new Voiture('Tesla','S',5999,2),
            new Voiture('Ford','Mustang Shelby GT500',6001,1),
        );
    }

    public static function getByAcheteur($acheteur) {
        $list = self::all();
        $listVoitures = array();
        foreach($list as $voiture){
            if($voiture->idAcheteur === $acheteur->id){
                $listVoitures[]=$voiture;
            }
        }
        return $listVoitures;
    }
}