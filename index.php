<?php

$routes = [
    0 => [
        "controller" => "Voiture",
        "function" => "index",
        "requires" => [
            0=>"Controller/VoitureController.php",
            1=>"Model/Voiture.php",
            2=>"Model/Acheteur.php"

        ]
    ],
    1 => [
        "controller" => "Home",
        "function" => "index",
        "requires" => [
            0=>"Controller/HomeController.php",
            1=>"Model/Voiture.php"
           

        ],
    ],
    2 => [
        "controller" => "Acheteur",
        "function" => "index",
        "requires" => [
            0=>"Controller/AcheteurController.php",
            1=>"Model/Voiture.php",
            2=>"Model/Acheteur.php"

        ]
    ],
];

$route = $routes[2];

$requires = $route["requires"];

foreach($requires as $require){
    require_once $require;
}



$controllerString = $route["controller"]."Controller";
$functionString = $route["function"];

$controller = new $controllerString();
$controller->$functionString(1);
