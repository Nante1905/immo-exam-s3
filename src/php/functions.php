<?php
require_once('connection.php');

function getHabitationById($id) {
    $pdo = setPostgresConnection();
    $req = "select * from habitations where idhabitations=$id";
    $res = $pdo->query($req);
    $res->setFetchMode(PDO::FETCH_OBJ);

    $data = $res->fetchAll();

    return $data;
}
function setReservation($idhabitations, $idusers, $datedebut, $datefin) {
    $pdo = setPostgresConnection();
    $date1 = date_create($datedebut);
    // var_dump($date1);
    $date2 = date_create($datefin);
    $diff = date_diff($date1, $date2, true);
    $interval = $diff->days;

    $req = $pdo->query("select count(*) isany from reservation where datereservation>='$datedebut'::date and datereservation<='$datefin'::date and idhab=$idhabitations");
    $req->setFetchMode(PDO::FETCH_OBJ);
    $res = $req->fetchAll();

    if($res[0]->isany >= 1) {
        return false;
    }
    else {
        for($i = 0; $i<$interval; $i++) {
            $query = "insert into reservation values(DEFAULT, $idusers, $idhabitations, '$datedebut'::date + '$i days'::interval)";
        }
        return true;
    }
}
function login($email, $mdp) {
    $pdo = setPostgresConnection();
    $query = "select count(*) isany, idusers from users where email='$email' and mdp='$mdp' group by idusers";
    $res = $pdo->query($query);
    $res->setFetchMode(PDO::FETCH_OBJ);
    $data = $res->fetchAll();

    if($data[0]->isany === 1) {
        session_start();
        $_SESSION["usersession"] = $data[0]->idusers;
        return true;
    }
    return false;
}

function inscription($email, $nom, $mdp, $tel) {
    $pdo = setPostgresConnection();
    $query = "insert into users values (DEFAULT, '$email', '$nom', '$mdp', '$tel')";
    $res = $pdo->exec($query);

    return $res;
}
function getTypeById($id) {
    $pdo = setPostgresConnection();
    $query = "select * from types where idtypes=$id";
    $res = $pdo->query($query);
    $res->setFetchMode(PDO::FETCH_OBJ);
    $data = $res->fetchAll();

    return $data[0]->nomtype;
}