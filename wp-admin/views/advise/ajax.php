<?php 
    require_once "../../../wp-admin/dbcon.php";

    global $pdo;

    if (isset($_POST['modules']) && $_POST['modules'] == 'exec-advise' && isset($_POST['id'])) {
        $sql = "UPDATE tuvan 
                    SET 
                        TrangThai = 1
                    WHERE id = :id";
            $stmt= $pdo->prepare($sql);
            $stmt->bindParam(':id', $_POST['id'], PDO::PARAM_INT);

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