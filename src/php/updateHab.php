<?php
    require_once("functionHabitation.php");
    $idHab = $_GET['id'];
    $type = $_GET['type'];
    $nbreChambre = $_GET['nbrechambre'];
    $loyer = $_GET['loyer'];
    $quartier = $_GET['quartier'];
    $descri = $_GET['description'];
    updateHab($idHab,$type,$nbreChambre,$loyer,$quartier,$descri);
?>