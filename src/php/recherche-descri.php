<?php
    require_once("functionHabitation.php");
    $descri = $_POST['descri'];
    $recherche = rechercheDescri($descri);
    $response = array(
        "recherche" => $recherche
    );
    echo json_encode($response);
?>