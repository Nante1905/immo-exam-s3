<?php

$email = $_POST["email"];
$nom = $_POST["nom"];
$mdp = $_POST["mdp"];
$tel = $_POST["tel"];

if(!isset($_POST["email"], $_POST["nom"], $_POST["mdp"], $_POST["tel"])) {
    $res = array(
        "inscri" => "error"
    );
    echo json_encode($res);
}
else {
    $data = inscription($email, $nom, $mdp, $tel);
    if($data === 1) {
        $res = array(
            "inscri" => "yes"
        );
    }
    else {
        $res = array(
            "inscri" => "error"
        );
    }
    echo json_encode($res);
}