<?php
    require_once("functionHabitation.php");
    if(!isset($_GET["id"])) {
        $allHab = getAllHab();
        $response = array(
            "allHab" => $allHab
        );
        echo json_encode($response);
    }
    else {
        $allHab = getAllHabByTypes($_GET["id"]);
        $response = array(
            "allHab" => $allHab
        );
        echo json_encode($response);
    }
?>