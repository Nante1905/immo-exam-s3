<?php
require_once("./functions.php");
if(!isset($_POST["email"]) || !isset($_POST["mdp"])) {
    $res = array(
        "logres" => "not logged"
    );

    echo json_encode($res);
}
else {
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

    if($email === "admin" && $mdp === "admin") {
        $res = array(
            "logres" => "logged as admin"
        );
    
        echo json_encode($res);
    }
    else {
        $logged = login($email, $mdp);
    
        if($logged) {
            $res = array(
                "logres" => "logged"
            );
        
            echo json_encode($res);
        }
        else {
            $res = array(
                "logres" => "not logged"
            );
        
            echo json_encode($res);
        }
    }


}
