<?php
    require_once("connection.php");
    function getAllHab()
    {
        $connection = setPostgresConnection();
        $req = $connection->query("select * from habitations join photo on habitations.idhabitations=photo.idhabitations join types on habitations.types=types.idtypes where photo.categorie='main'");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        
        return $res;
        // return $res;
    }
    function getAllHabByTypes($idtype) 
    {
        $connection = setPostgresConnection();
        $req = $connection->query("select * from habitations join photo on habitations.idhabitations=photo.idhabitations join types on habitations.types=types.idtypes where photo.categorie='main' and habitations.types = $idtype");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        
        return $res;
        // return $res;
    }
    function getIdHab(){
        $connection = setPostgresConnection();
        $req = $connection->query("select max(idhabitations) as idhab from habitations");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
    }
    function getIdType($nomType){
        $connection = setPostgresConnection();
        $req = $connection->query("select idtypes from types where nomtype='$nomType'");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
    }
    function addPhoto($photo){
        $connection = setPostgresConnection();
        $maxIdHab = getIdHab();
        $maxIdHab = $maxIdHab[0]->idhab;
        $res = $connection->exec("insert into photo values (DEFAULT,$maxIdHab,'$photo')");
        return $res;
    }
    function addHab($type,$nbreChambre,$loyer,$quartier,$descri){
        $connection = setPostgresConnection();
        $idtype = getIdType($type);
        $idtype = $idtype[0]->idtypes;
        $res = $connection->exec("insert into habitations VALUES (DEFAULT,$idtype,$nbreChambre,$loyer,'$quartier','$descri')");
        return $res;
    }
    function updateHab($idHab,$type,$nbreChambre,$loyer,$quartier,$descri){
        $connection = setPostgresConnection();
        $idtype = getIdType($type);
        $idtype = $idtype[0]->idtypes;
        $connection->exec("update habitations set Types=$idtype,nombreDeChambre=$nbreChambre,loyer=$loyer,quartier='$quartier',descri='$descri' where idhabitations=$idHab");
    }
    function deleteHab($idHab){
        $connection = setPostgresConnection();
        $connection->exec("delete from habitations where idhabitations=$idHab");
    }
    function rechercheDescri($descri){
        $connection = setPostgresConnection();
        $req = $connection->query("select * from habitations join photo on habitations.idhabitations=photo.idhabitations join types on habitations.types=types.idtypes where photo.categorie='main' and descri like '%$descri%'");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
    }
    function getDisponibilite($day,$month,$year){
        $connection = setPostgresConnection();
        $req = $connection->query("select * from habitations where id not in (select idHab from reservation where extract(day from datereservation)='$day' and extract(month from datereservation)='$month' and extract(year from datereservation)='$year')");
        $req->setFetchMode(PDO::FETCH_OBJ);
        $res = $req->fetchAll();
        return $res;
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