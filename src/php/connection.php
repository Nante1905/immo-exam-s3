<?php
function setConnection() {
    $user='postgres';
    $pass='Grace1764';
    $dsn='pgsql:host=localhost;port=5432;dbname=immobilier';
    $pdo = new PDO($dsn, $user, $pass);
    return $pdo;
}