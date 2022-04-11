<?php 
    require_once('../../../wp-admin/dbcon.php');
    
    global $pdo;

    if (isset($_POST['modules']) && $_POST['modules'] == 'new-advise' && isset($_POST['hoten']) && isset($_POST['chuyenkhoa']) && isset($_POST['dienthoai'])) {

        $sql = "INSERT INTO tuvan (HoTen, SoDienThoai, ChuyenKhoa, Source)
                    VALUES (:hoten, :sodienthoai, :chuyenkhoa, :source)";
            $stmt= $pdo->prepare($sql);
            $stmt->bindParam(':hoten', $_POST['hoten'], PDO::PARAM_STR);
            $stmt->bindParam(':sodienthoai', $_POST['dienthoai'], PDO::PARAM_STR);
            $stmt->bindParam(':chuyenkhoa', $_POST['chuyenkhoa'], PDO::PARAM_STR);
            $stmt->bindParam(':source', $_POST['source'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "true";
            } else {
                echo "false";
            }
            
            unset($sql);
            unset($result);
            die;
    }
?>