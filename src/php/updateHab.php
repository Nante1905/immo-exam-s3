<?php
    require_once("functionHabitation.php");
    $idHab = $_GET['id'];
    $type = $_GET['type'];
    $nbreChambre = $_GET['chambres'];
    $loyer = $_GET['loyer'];
    $quartier = $_GET['quartier'];
    $descri = $_GET['descri'];
    updateHab($idHab,$type,$nbreChambre,$loyer,$quartier,$descri);

    header("location: ../pages/admin.php");
?>