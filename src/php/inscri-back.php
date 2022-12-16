<?php
require_once('functions.php');

if(!isset($_POST["email"], $_POST["nom"], $_POST["mdp"], $_POST["tel"])) {
    $res = array(
        "inscri" => "error"
    );
    echo json_encode($res);
}
else {
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $mdp = $_POST["mdp"];
    $tel = $_POST["tel"];
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