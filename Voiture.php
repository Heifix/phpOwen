<?php

class Voiture {
     private $name;
     private $model;
     //etc

     public function __construct($name, $model){
         $this->name = $name;
         $this->model = $model;
     }

     public function getName(){
        return $this->name;
     }

     public function getModel(){
        return $this->model;
     }

     public function setName($newName){
        $this->name= $newName;
     }

     public function setModel($newModel){
        $this->model= $newModel;
     }
}