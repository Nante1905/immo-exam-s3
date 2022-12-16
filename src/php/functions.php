<?php
require_once('./connection.php');

function getHabitationById($id) {
    $pdo = setPostgresConnection();
    $req = "";
    $res = $pdo->query($req);
    $res->setFetchMode(PDO::FETCH_OBJ);

    $data = $res->fetchAll();

    return $data;
}
function setReservation($id, $datedebut, $datefin) {
    $date1 = date_create($datedebut);
    $date2 = date_create($datefin);
    $diff = date_diff($date1, $date2, true);
    $interval = $diff->days;

    for($i = 1; $i<=$interval; $i++) {
        $query = "insert into reservation values()";
    }
}
function login($email, $mdp) {
    $pdo = setPostgresConnection();
    $query = "select count(*) isany from users where email='$email' and mdp='$mdp'";
    $res = $pdo->query($query);
    $res->setFetchMode(PDO::FETCH_OBJ);
    $data = $res->fetchAll();

    if($data[0]->isany === 1) {
        return true;
    }
    return false;
}