<?php

class Voiture {
   public $name;
   public $model;
   public $kilometers;
   public $idAcheter;
   //etc

   public function __construct($name, $model,$kilometers,$idAcheter){
      $this->name = $name;
      $this->model = $model;
      $this->kilometers = $kilometers;
      $this->idAcheter=$idAcheter;
   }

   public function isSecondHand(){
      $secondHand = false;
      if($this->kilometers >= 6000){
         $secondHand = true;
         $response = "La voiture est d'occasion avec ".$this->kilometers."km.";
      }
      else{
         $response = "La voiture est neuve avec seulement ".$this->kilometers."km.";
      }
        return $response;
   }
}

///associer,acheteur + voiture
//passer idacheter en parametre de methode 
//conserver l'autre root V
//nouvelle rout afficher seulement voiture de l'acheteur en fonction de l'id