<?php
    require_once("functionHabitation.php");
    $descri = $_GET['descri'];
    $recherche = rechercheDescri($descri);
    $response = array(
        "req" => $recherche
    );
    echo json_encode($response);
?>