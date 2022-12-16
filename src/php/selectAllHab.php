<?php
    require_once("functionHabitation.php");
    $allHab = getAllHab();
    $response = array(
        "allHab" => $allHab
    );
    echo json_encode($response);
?>