<?php
function listeVoitures()
{
    $voitures = getVoitures();

    require('View/voitureView.php');
}

function post()
{
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}