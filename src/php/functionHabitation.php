<?php
    require_once("connection.php");
    function getAllHab()
    {
<<<<<<< HEAD
        $connection = setPostgresConnection();
=======
        $connection = setConnection();
>>>>>>> grace
        $req = $connection->query("select * from habitations");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        
        return $res;
        // return $res;
    }
    function getIdHab(){
        $connection = setPostgresConnection();
        $req = $connection->query("select max(idhabitations) from habitations");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
    }
    function getIdType($nomType){
        $connection = setConnection();
        $connection->query("select idtypes from types where nomtype=$nomType");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
    }
    function addPhoto($photo){
        $connection = setPostgresConnection();
        $maxIdHab = getIdHab();
        $res = $connection->exec("insert into photo values (DEFAULT,$maxIdHab,$photo)");
        return $res;
    }
    function addHab($type,$nbreChambre,$loyer,$quartier,$descri){
<<<<<<< HEAD
        $connection = setPostgresConnection();
        // $res = $connection->exec("insert into habitations VALUES DEFAULT,$type,$nbreChambre,$loyer,$quartier,$descri");
        return 1;
=======
        $connection = setConnection();
        $idType = getIdType($type);
        $connection->exec("insert into habitation VALUES DEFAULT,$idType,$nbreChambre,$loyer,$quartier,$descri");
>>>>>>> grace
    }
    function updateHab($idHab,$type,$nbreChambre,$loyer,$quartier,$descri){
        $connection = setPostgresConnection();
        $connection->exec("update habitations set Types=$type,nombreDeChambre=$nbreChambre,LoyerJr=$loyer,Quartier=$quartier,descri=$descri where id=$idHab");
    }
    function deleteHab($idHab){
<<<<<<< HEAD
=======
        $connection = setConnection();
        $connection->exec("delete from habitations where id=$idHab");
    }
    function getMontantLoyerParJour($mois,$annee){
>>>>>>> grace
        $connection = setPostgresConnection();
        $connection->exec("delete from habitations where id=$idHab");
    }
    // function getMontantLoyerParJour($mois,$annee){
    //     $connection = setPostgresConnection();
    //     $req = $connection->query(/*requete*/);
    //     $req->setFetchMode(PDO::FETCH_OBJ);
    //     $res = $req->fetchAll();
    //     return json_encode($res);
    // }



    // insert into reservation values();

    // select photo.nomPhoto FROM photo join habitation on habitation.idPhoto=photo.idPhoto
?>