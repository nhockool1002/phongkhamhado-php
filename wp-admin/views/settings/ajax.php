<?php 
    require_once "../../../lib/class_db.php";
    require_once "../../constants.php";
    
    // Set table
    $db = new db;
    $table = TABLE_SETTING;

    if (isset($_POST['modules']) && $_POST['modules'] == 'update-settings') {
        if (isset($_POST['title']) && isset($_POST['description'])) {
            $sql = "UPDATE {$table} SET Title = '{$_POST['title']}', Description = '{$_POST['description']}' WHERE idSetting = 1";
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

    if (isset($_POST['modules']) && $_POST['modules'] == 'onload-settings') {
        $sql = "SELECT * FROM {$table}";
        $result = mysql_query($sql) or die (mysql_error());
        $row_rs = mysql_fetch_assoc($result);
        $age = array("Title" => $row_rs['Title'], "Description" => $row_rs['Description']);

        echo json_encode($age);
    }
?>