<?php
require_once('./functions.php');

if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $data = getHabitationById($id);

    echo json_encode($data);
}