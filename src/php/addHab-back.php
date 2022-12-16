<?php
    require_once("functionHabitation.php");
    $type = $_GET['type'];
    $nbreChambre = $_GET['chambres'];
    $loyer = $_GET['loyer'];
    $quartier = $_GET['quartier'];
    $descri = $_GET['descri'];
    $countfiles = count($_FILES['file']['name']);
    $filename = [];
    $resphoto = [];
    
    $reshab = addHab($type,$nbreChambre,$loyer,$quartier,$descri);
    for($i=0;$i<$countfiles;$i++){
        $filename[$i] = $_FILES['file']['name'][$i];
        $ext = strrchr($filename[$i], ".");
        move_uploaded_file($_FILES['file']['tmp_name'][$i],"C:/xampp/htdocs/immo-exam-s3/assets/img/".date("Y/m/d_h_i_s")."_$i".$ext);
        $photo = addPhoto(date("Y-m-d h:i:sa"));
        array_push($resphoto, $photo);
    }

?>