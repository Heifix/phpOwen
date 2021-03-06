<?php

$routes = [
    "voitures" => [
        "controller" => "Voiture",
        "function" => "index",
        "requires" => [
            0=>"Controller/VoitureController.php",
            1=>"Model/Voiture.php",
            2=>"Model/Acheteur.php",
            3=>"Persistance/VoiturePersistance.php",
            4=>"Persistance/AcheteurPersistance.php",
        ]
    ],
    "accueil" => [
        "controller" => "Home",
        "function" => "index",
        "requires" => [
            0=>"Controller/HomeController.php",
            1=>"Model/Voiture.php",
        ],
    ],
    "acheteurById" => [
        "controller" => "Acheteur",
        "function" => "index",
        "requires" => [
            0=>"Controller/AcheteurController.php",
            1=>"Model/Voiture.php",
            2=>"Model/Acheteur.php",
            3=>"Persistance/VoiturePersistance.php",
            4=>"Persistance/AcheteurPersistance.php",
        ]
    ],
    "voitureById" => [
        "controller" => "Voiture",
        "function" => "voitureByAcheteur",
        "requires" => [
            0=>"Controller/VoitureController.php",
            1=>"Model/Voiture.php",
            2=>"Model/Acheteur.php",
            3=>"Persistance/VoiturePersistance.php",
            4=>"Persistance/AcheteurPersistance.php",
        ]
    ],
];

$route = $routes[$_GET['url']];

$requires = $route["requires"];

foreach($requires as $require){
    require_once $require;
}

if(!isset($_GET['id'])){
    $_GET['id']=null;
}

$controllerString = $route["controller"]."Controller";
$functionString = $route["function"];

$controller = new $controllerString();
$controller->$functionString($_GET['id']);
