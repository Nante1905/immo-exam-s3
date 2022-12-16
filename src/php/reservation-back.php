<?php
    require_once("functions.php");
    session_start();
    $idhabitations = $_GET['id'];
    $idusers = $_SESSION['usersession'];
    $datedebut = $_GET['dateDebut'];
    $dateFin = $_GET['dateFin'];
    setReservation($idhabitations, $idusers, $datedebut, $datefin);
    header('Location:detail.php');
?>