<?php
    require_once("functions.php");
    session_start();
    $idhabitations = $_GET['id'];
    $idusers = $_SESSION['usersession'];
    $datedebut = $_GET['dateDebut'];
    $datefin = $_GET['dateFin'];
    $isreserve = setReservation($idhabitations, $idusers, $datedebut, $datefin);
    if($isreserve) {
        header('Location: ../pages/habitations.html');
    }
    else {
        header('Location: ../pages/details.php?error=1&id='.$idhabitations);
    }
?>