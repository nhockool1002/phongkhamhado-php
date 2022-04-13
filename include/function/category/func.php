<?php
    require_once('wp-admin/dbcon.php');

    function getAllParentCat()
    {
        global $pdo;

        $query = $pdo->prepare('SELECT * FROM loai WHERE Parent = 0');
        $query->execute();
        $result = $query -> fetchAll();

        return $result;
    }

    function getCatBySlug($slug)
    {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM tintuc WHERE TieuDeKD = '{$slug}'");
        $query->execute();
        $result = $query -> fetch();

        $query = $pdo->prepare("SELECT * FROM loai WHERE idLoai = '{$result['idCL']}'");
        $query->execute();
        $result = $query -> fetch();

        return $result;
    }
?>