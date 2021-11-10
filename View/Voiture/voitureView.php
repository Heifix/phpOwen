
 <?php 
        $listVoitureDifférente= array_diff($listVoitures,$listVoitures);
        if(count($listVoitureDifférente) == 0){
            echo '<h1>Liste des voitures de nom du mec';
        }
        else{
            echo '<h1>Liste des voitures de la concession</h1>';
        }

    

?>

<table>
<tr>
    <th>Marque</th>
    <th>Modele</th>
    <th>Acheteur<th>
</tr>


<?php 
// var_dump($acheteur); die;
foreach ($listVoitures as $voiture){
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
                if($voiture->acheteur ==null){
                    echo "Disponible a l'achat";
                }
                else{
                    echo $voiture->acheteur->nom." ".$voiture->acheteur->prenom;
                }
                ?>
            </td>
        </tr><?php
}

    ?>
</table>
