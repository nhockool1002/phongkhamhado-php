<?php
    require_once('wp-admin/dbcon.php');

    function getAllPost()
    {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM tintuc');
        $query->execute();
        $result = $query -> fetchAll();

        return $result;
    }
?>