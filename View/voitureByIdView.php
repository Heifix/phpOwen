<?php 

echo '<h1>Liste des voitures de la concession ayant ete achete par'; //($proprietaire) 

?>


<table>
<tr>
    <th>Marque</th>
    <th>Modele</th>
    <th>proprietaire<th>
</tr>


<?php 

foreach ($listVoiture as $voiture){
    if($voiture->idAcheter == 1){
    ?>
    <tr>
        <td>
            <?php 
                echo $voiture->name;
            ?>
        </td>
        <td>
            <?php 
                echo $voiture->model;
            ?>
        </td>
        <td>
            <?php
                $tempIdVoiture=$voiture->idAcheter;
                foreach ($listAcheteurs as $acheteur){
                    if($acheteur->id == $tempIdVoiture){
                        echo $acheteur->nom." ";
                        echo $acheteur->prenom;
                        $proprietaire = $acheteur->nom." ".$acheteur->prenom; 
                    }
                    
                }
            ?>
        </td>
    </tr>
        <?php
    }        
}

        ?>
</table>

