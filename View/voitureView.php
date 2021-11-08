<?php 

echo '<h1>Liste des voitures de la concession</h1>';

?>

<table>
<tr>
    <th>Marque</th>
    <th>Modele</th>
    <th>Km</th>
    <th>Photo<th>
</tr>


<?php 

foreach ($listVoiture as $voiture){?>
    <tr>
        <td>
            <?php 
                echo $voiture->getName();
            ?>
        </td>
            
        <td>
            <?php 
            
                echo $voiture->getModel();
        
            ?>
        </td>
            
        <td>
            <?php 

                echo $voiture->getKilometers();
        
            ?>
        </td>

        <td>
            <?php 

                echo $voiture->getKilometers();
        
            ?>
        </td>
        
    </tr>
    <?php
}

?>


</table>

