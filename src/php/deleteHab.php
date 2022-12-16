<?php
    require_once("functionHabitation.php");
    $idHab = $_GET['id'];
    deleteHab($idHab);
    header("location: ../pages/admin.php");
?>