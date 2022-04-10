<?php
require_once "../wp-admin/dbcon.php";

function getAllAdviseAdmin()
{
    global $pdo;
    $query = $pdo->prepare("SELECT * FROM tuvan");
    $query->execute();
    $result = $query -> fetchAll();

    return $result;
}

?>