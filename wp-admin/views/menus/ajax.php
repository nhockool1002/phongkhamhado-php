<?php 
    require_once "../../../lib/class_db.php";
    require_once "../../constants.php";
    
    // Set table
    $db = new db;
    $table = TABLE_MENU;

    if (isset($_POST['modules']) && $_POST['modules'] == 'add-new-menu') {
        if (isset($_POST['title']) && isset($_POST['path'])  && isset($_POST['parent'])) {
            $sql = "INSERT INTO {$table} (parent_id, name, link) VALUES ('{$_POST['parent']}', '{$_POST['title']}', '{$_POST['path']}')";
            $result = mysql_query($sql);
            if ($result == false) {
                echo "false";
            } else {
                echo "true";
            }
            unset($sql);
            unset($result);
        }
    }

    if (isset($_POST['modules']) && $_POST['modules'] == 'delete-menu') {
        if (isset($_POST['id'])) {
            $sql = "DELETE FROM {$table} WHERE id = '{$_POST['id']}' OR parent_id = '{$_POST['id']}'";
            $result = mysql_query($sql);
            if ($result == false) {
                echo "false";
            } else {
                echo "true";
            }
            unset($sql);
            unset($result);
        }
    }

    if (isset($_POST['modules']) && $_POST['modules'] == 'edit-menu') {
        if (isset($_POST['id'])) {
            $sql = "SELECT * FROM {$table} WHERE id = '{$_POST['id']}'";
            $result = mysql_query($sql) or die (mysql_error());
            $row_rs = mysql_fetch_assoc($result);
            $age = array("ParentId" => $row_rs['parent_id'], "Path" => $row_rs['link'], "Title" => $row_rs['name']);

            echo json_encode($age);
        }
    }

    if (isset($_POST['modules']) && $_POST['modules'] == 'submit-edit-menu') {
        if (isset($_POST['id']) && isset($_POST['title']) && isset($_POST['path'])  && isset($_POST['parent'])) {
            $sql = "UPDATE {$table} SET name = '{$_POST['title']}', link = '{$_POST['path']}', parent_id = '{$_POST['parent']}' WHERE id = '{$_POST['id']}'";
            $result = mysql_query($sql);
            if ($result == false) {
                echo "false";
            } else {
                echo "true";
            }
            unset($sql);
            unset($result);
        }
    }
?>