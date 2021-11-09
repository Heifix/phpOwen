
 <?php 

echo '<h1>Liste des voitures de la concession</h1>';

?>

<table>
<tr>
    <th>Marque</th>
    <th>Modele</th>
    <th>IdAcheter<th>
</tr>


<?php 

foreach ($listVoiture as $voiture){?>
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
        <form action="http://127.0.0.1/phpOwen/View/VoitureByIdView.php" method="get">
            <button type="submit">
                <?php
                    $tempIdVoiture=$voiture->idAcheter;
                    foreach ($listAcheteurs as $acheteur){
                        if($acheteur->id == $tempIdVoiture){
                            echo $acheteur->nom." ".$acheteur->prenom;
                        }
                    
                    }
                ?>
            </button>
        </form>
        </td>
    </tr>
        <?php
        
}

        ?>
</table>
