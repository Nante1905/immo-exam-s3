<?php
    require_once("connection.php");
    function getAllHab()
    {
        $connection = setPostgresConnection();
        $req = $connection->query(/*requete*/);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        
        return json_encode($res);
        // return $res;
    }
    function getIdHab(){
        $connection = setPostgresConnection();
        $req = $connection->query("select max(id) from habitations");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
    }
    function addPhoto($photo){
        $connection = setPostgresConnection();
        $maxIdHab = getIdHab();
        $connection->exec("insert into photo values $maxIdHab,$photo");
    }
    function addHab($type,$nbreChambre,$loyer,$quartier,$descri){
        $connection = setPostgresConnection();
        $connection->exec("insert into habitation VALUES DEFAULT,$type,$nbreChambre,$loyer,$quartier,$descri");
    }
    function updateHab($idHab,$type,$nbreChambre,$loyer,$quartier,$descri){
        $connection = setPostgresConnection();
        $connection->exec("update habitations set Types=$type,nombreDeChambre=$nbreChambre,LoyerJr=$loyer,Quartier=$quartier,descri=$descri where id=$idHab");
    }
    function deleteHab($idHab){
        $connection = setPostgresConnection();
        $connection->exec("delete from habitations where id=$idHab");
    }
    function getMontantLoyerParJour($mois,$annee){
        $connection = setPostgresConnection();
        $req = $connection->query(/*requete*/);
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return json_encode($res);
    }



    // insert into reservation values();

    // select photo.nomPhoto FROM photo join habitation on habitation.idPhoto=photo.idPhoto
?>