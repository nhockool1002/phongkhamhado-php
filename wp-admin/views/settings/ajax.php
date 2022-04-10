<?php 
    require_once "../../../lib/class_db.php";
    require_once "../../constants.php";
    require_once "../../../wp-admin/dbcon.php";
    
    // Set table
    $db = new db;
    $table = TABLE_SETTING;
    global $pdo;

    if (isset($_POST['modules']) && $_POST['modules'] == 'update-settings') {
        if (
            isset($_POST['title']) &&
            isset($_POST['description']) &&
            isset($_POST['location']) &&
            isset($_POST['phone']) &&
            isset($_POST['copyright']) &&
            isset($_POST['facebook']) &&
            isset($_POST['twitter']) &&
            isset($_POST['instagram']) &&
            isset($_POST['youtube']) &&
            isset($_POST['website']) &&
            isset($_POST['email'])
        ) {
            $sql = "UPDATE setting 
                    SET 
                        Title = :title, 
                        Description = :description,
                        Location = :location,
                        Phone = :phone,
                        FacebookLink = :facebook,
                        TwitterLink = :twitter,
                        InsLink = :instagram,
                        YoutubeLink = :youtube,
                        Copyright = :copyright,
                        Website = :website,
                        Mail = :mail
                    WHERE idSetting = 1";
            $stmt= $pdo->prepare($sql);
            $stmt->bindParam(':title', $_POST['title'], PDO::PARAM_STR);
            $stmt->bindParam(':description', $_POST['description'], PDO::PARAM_STR);
            $stmt->bindParam(':location', $_POST['location'], PDO::PARAM_STR);
            $stmt->bindParam(':phone', $_POST['phone'], PDO::PARAM_STR);
            $stmt->bindParam(':facebook', $_POST['facebook'], PDO::PARAM_STR);
            $stmt->bindParam(':instagram', $_POST['instagram'], PDO::PARAM_STR);
            $stmt->bindParam(':youtube', $_POST['youtube'], PDO::PARAM_STR);
            $stmt->bindParam(':copyright', $_POST['copyright'], PDO::PARAM_STR);
            $stmt->bindParam(':website', $_POST['website'], PDO::PARAM_STR);
            $stmt->bindParam(':mail', $_POST['email'], PDO::PARAM_STR);
            $stmt->bindParam(':twitter', $_POST['twitter'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                echo "true";
            } else {
                echo "false";
            }
            
            unset($sql);
            unset($result);
            die;
        }
    }

    if (isset($_POST['modules']) && $_POST['modules'] == 'onload-settings') {
        $sql = "SELECT * FROM {$table}";
        $result = mysql_query($sql) or die (mysql_error());
        $row_rs = mysql_fetch_assoc($result);
        $age = array(
            "Title" => $row_rs['Title'],
            "Description" => $row_rs['Description'],
            "Location" => $row_rs['Location'],
            "Phone" => $row_rs['Phone'],
            "Copyright" => $row_rs['Copyright'],
            "Facebook" => $row_rs['FaceBookLink'],
            "Twitter" => $row_rs['TwitterLink'],
            "Instagram" => $row_rs['InsLink'],
            "Youtube" => $row_rs['YoutubeLink'],
            "Website" => $row_rs['Website'],
            "Mail" => $row_rs['Mail'],
        );

        echo json_encode($age);
        die;
    }
?>