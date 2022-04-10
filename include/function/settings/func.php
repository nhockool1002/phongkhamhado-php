<?php
    require_once('wp-admin/dbcon.php');

    function getAllSettings()
    {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM setting WHERE idSetting = 1');
        $query->execute();
        $result = $query -> fetch();

        return $result;
    }
?>