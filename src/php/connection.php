<?php
function setPostgresConnection() {
    $user='postgres';
    $pass='2003';
    $dsn='pgsql:host=localhost;port=5432;dbname=testimmo';
    $pdo = new PDO($dsn, $user, $pass);
    return $pdo;
}