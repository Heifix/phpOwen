<?php

class AcheteurPersistance {
    public static function all() {
        return array(
            new Acheteur(1,"PELET","Fx"),
            new Acheteur(2,"BOUTET","Owen"),
        );
    }

    public static function getById($id) {
        $list = self::all();
        $return = null;
        foreach($list as $acheteur)
            if($acheteur->id == $id) 
                return $acheteur;
    }
}