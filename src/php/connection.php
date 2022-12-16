<?php
function setPostgresConnection() {
    $user='postgres';
    $pass='Grace1764';
    $dsn='pgsql:host=localhost;port=5432;dbname=testimmo';
    $pdo = new PDO($dsn, $user, $pass);
    return $pdo;
}