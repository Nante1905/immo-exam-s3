<?php
function setConnection() {
    $host = 'localhost';
    $PORT = 3306;
    $dbname = 'Immobilier';

    $pdo = new PDO('mysql:host=' . $host . ';port=' . $PORT . ';dbname=' . $dbname, 'root', '');
    
    return $pdo;
}