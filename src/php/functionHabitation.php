<?php
    require_once("connection.php");
    function getAllHab()
    {
        $connection = setConnection();
        $req = $connection->query(/*requete*/);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        
        return json_encode($res);
        // return $res;
    }
    function addHab($idHab,$type,$nbreChambre,$loyer,$quartier,$descri){
        $connection = setConnection();
        $photo = upload();
        for($i=0;$i<count($photo);$i++){
            
        }
        $connection->exec(/*requete*/);
        $connection->exec(/*requete*/);
    }
    function updateHab($idHab,$type,$nbreChambre,$loyer,$photo,$quartier,$descri){
        $connection = setConnection();
        $connection->exec(/*requete*/);
    }
    function deleteHab($idHab){
        $connection = setConnection();
        $connection->exec(/*requete*/);
    }
    function getMontantLoyerParJour($mois,$annee){
        $connection = setConnection();
        $req = $connection->query(/*requete*/);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return json_encode($res);
    }

    function upload(){
        $countfiles = count($_FILES['file']['name']);
        $filename = [];
        for($i=0;$i<$countfiles;$i++){
            $filename[i] = $_FILES['file']['name'][$i];
            move_uploaded_file($_FILES['file']['tmp_name'][$i],'upload/'.$filename);
        }
        return $filename;
    } 

    // // select * from habitation where idHabitation=$idHabitation;

    // insert into reservation values();

    // select photo.nomPhoto FROM photo join habitation on habitation.idPhoto=photo.idPhoto
?>