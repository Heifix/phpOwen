
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
            <?php
                echo $acheteur->nom." ".$acheteur->prenom;
            ?>
        </td>
    </tr>
    <?php
}

    ?>
</table>
