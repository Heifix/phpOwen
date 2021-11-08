<?php

class Voiture {
     private $name;
     private $model;
     private $kilometers;
     //etc

     public function __construct($name, $model,$kilometers){
         $this->name = $name;
         $this->model = $model;
         $this->kilometers = $kilometers;
     }

     public function getName(){
        return $this->name;
     }

     public function getModel(){
        return $this->model;
     }

     public function getKilometers(){
        return $this->kilometers;
     }

     public function setName($newName){
        $this->name= $newName;
     }

     public function setModel($newModel){
        $this->model= $newModel;
     }

     public function setKilometers($newKilometers){
        $this->kilometers = $newkilometers;
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