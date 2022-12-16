<?php
    require_once("functionHabitation.php");
    $type = $_POST['type'];
    $nbreChambre = $_POST['chambres'];
    $loyer = $_POST['loyer'];
    $quartier = $_POST['quartier'];
    $descri = $_POST['descri'];
    $countfiles = count($_FILES['file']['name']);
    $filename = [];
    $resphoto = [];
    
    $reshab = addHab($type,$nbreChambre,$loyer,$quartier,$descri);
    for($i=0;$i<$countfiles;$i++){
        $filename[$i] = $_FILES['file']['name'][$i];
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'./../../assets/img/'.$filename[$i]);
        $photo = addPhoto($filename[$i]);
        array_push($resphoto, $photo);
    }
    if($reshab == 1 && count($resphoto) == $countfiles) {
        $res = array(
            "addstatus" => "true"
        );
    } 
    else {
        $res = array(
            "addstatus" => "false"
        );
    }
    echo json_encode($res);

?>