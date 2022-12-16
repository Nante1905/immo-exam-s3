<?php
    require_once("functionHabitation.php");
    $type = $_GET['type'];
    $nbreChambre = $_GET['nbrechambre'];
    $loyer = $_GET['loyer'];
    $quartier = $_GET['quartier'];
    $descri = $_GET['description'];
    $countfiles = count($_FILES['file']['name']);
    $filename = [];
    addHab($type,$nbreChambre,$loyer,$quartier,$descri);
    for($i=0;$i<$countfiles;$i++){
        $filename[i] = $_FILES['file']['name'][$i];
        move_uploaded_file($_FILES['file']['tmp_name'][$i],'assets/img/'.$filename[$i]);
        addPhoto($filename[i]);
    }

?>