<?php
    require_once("functionHabitation.php");
    $allHab = getAllHab();
    $response = array(
        "req" => $allHab
    );
    echo json_encode($response);
?>