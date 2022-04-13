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

    function getPostsBySlugCat($slug)
    {
        global $pdo;

        $sql = "SELECT * FROM loai WHERE TieuDeKD = '{$slug}'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $result = $query -> fetch();
        
        $idCat = $result['idLoai'];
        unset($query);
        unset($result);

        $query = $pdo->prepare("SELECT * FROM tintuc WHERE idCL = '{$idCat}'");
        $query->execute();
        $result = $query->fetchAll();

        return $result;
    }

    function getPostBySlug($slug)
    {
        global $pdo;

        $sql = "SELECT * FROM tintuc WHERE TieuDeKD = '{$slug}'";
        $query = $pdo->prepare($sql);
        $query->execute();
        $result = $query -> fetch();

        return $result;
    }

    function getRelationPost($id) {
        global $pdo;

        $sql = "SELECT * FROM tintuc WHERE idCL = '{$id}' ORDER BY RAND() LIMIT 3";
        $query = $pdo->prepare($sql);
        $query->execute();
        $result = $query -> fetchAll();

        return $result;
    }
?>