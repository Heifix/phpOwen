<?php 

echo '<p> Voitures:</p>';
foreach ($listVoiture as $voiture){
    echo '<p> name: '. $voiture->getName() . '</p>';
    echo '<p> model: '. $voiture->getModel() . '</p>';
}

