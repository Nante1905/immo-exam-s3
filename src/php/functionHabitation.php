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
    function addHab(){
        $connection = setConnection();
        $connection->exec(/*requete*/);
    }
    function updateHab($idHab){
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
    // if(isset($_FILES['fichier'])){
    //     var_dump($_FILES);
    //     $dossier = 'img/';
    //     $nom = basename($_FILES['fichier']['name']);
    //     if(move_uploaded_file($_FILES['fichier']['tmp_name'],$dossier.$nom)){
    //         echo "upload reussi";
    //     }
    //     else{
    //         echo "echec";
    //     }
    // }

    // // select * from habitation where idHabitation=$idHabitation;
?>