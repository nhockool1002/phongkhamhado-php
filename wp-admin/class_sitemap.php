<?php
if (!ini_get('display_errors')) {
    ini_set('display_errors', '1');
}

ob_start();
session_start();

define('DOMAIN','http://phongkhamdaitin.vn');
define('SCOPE', 'sitemap');
define('JSON_CATE_FILENAME', 'sitemap_categories.json');
define('JSON_POST_FILENAME', 'sitemap_posts.json');

//require_once '/home/admin/dkvhl_config.php';
require_once "../lib/Class.DB.php";

class SiteMap extends db{

    public $array_cate_url = array(DOMAIN);//cái này của file config luôn
    public $array_post_url = array();
    // public $filename = '';


    public function writeData($to,$array){


        $json_string = json_encode($array,JSON_FORCE_OBJECT);

        $isOk = file_put_contents($to, $json_string);

        return ($isOk)?true:false;

    }

    public function checkFileExist($filename){
        return file_exists($filename);
    }

    public function create_file($filename){

        $success = fopen($filename, 'w');
        if($success){
            fclose($success);
            return true;
        }
        else{
            return false;
        }

    }


    public function getAllCategoriesByParentId($parentId = 0)
    {

        $sql = "
            SELECT *
			FROM  loai
			WHERE Parent = $parentId AND AnHien = 1
		";
        $rs = mysql_query($sql);

        if (mysql_num_rows($rs) > 0) {
            while ($item = mysql_fetch_assoc($rs)) {


                $url = DOMAIN .'/'. $item["TieuDeKD"] . '-' . $item['idLoai'].'/';

                array_push($this->array_cate_url, $url);
                self::getAllCategoriesByParentId($item['idLoai']);

            }
        }

    }


    public function getAllPosts()
    {
        $sql = "
                SELECT *
                FROM tintuc
                WHERE AnHien =1
		    ";
        $rs = mysql_query($sql) or die(mysql_error());
        if (mysql_num_rows($rs) > 0) {
            while ($post = mysql_fetch_assoc($rs)) {

                $url = DOMAIN .'/'. $post["TieuDeKD"].'.html';
                array_push($this->array_post_url, $url);
            }
        }
    }



    public function jsonEndCodeUtf8($data){
        return json_encode($data,JSON_UNESCAPED_UNICODE);
    }

    public function generateRandomString($length = 20) {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function generateWaiting($text,$wait_id){
        return $text."<span class='waiting' id='$wait_id'></span>";
    }

    //load JSON file and put data to the session
    public function initJSONFile($filepath){
        if(file_exists($filepath)){
            if($string = file_get_contents($filepath)) {
                $json = json_decode($string, true);
                $_SESSION["$filepath"] = $json;
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }

    }

    public function exportXML($filepath){
    	if(!$this->checkFileExist($filepath)){
    		if(!$this->create_file($filepath)){
    			return false;
    		}
    	}

		$string ='<?xml version="1.0" encoding="UTF-8"?>
            <urlset
            xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
            xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
            xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
            http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">'."\n";

        foreach ($_SESSION[JSON_CATE_FILENAME] as $k => $v) {
            $string .= "<url>\n";
            $string .= "<loc>" . $v . "</loc>\n";
            $string .= "<changefreq>daily</changefreq>\n";
            $string .= "<priority>0.80</priority>\n";
            $string .= "</url>\n";
        }
        foreach ($_SESSION[JSON_POST_FILENAME] as $k => $v) {
            $string .= "<url>\n";
            $string .= "<loc>" . $v . "</loc>\n";
            $string .= "<changefreq>daily</changefreq>\n";
            $string .= "<priority>0.80</priority>\n";
            $string .= "</url>\n";
        }
        $string.="</urlset>";

        $isOk = file_put_contents($filepath, $string);

        return ($isOk)?true:false;


    }

    public function getJSONElement($session,$i){
        return (isset($session[$i])) ? $session[$i] : false;
    }
}

// $sm = new SiteMap;
// $sm->test();

$sm = new SiteMap;
if(isset($_POST['data'])){
    $data = $_POST['data'];
    $wait_id = $sm->generateRandomString();
    $msg = [];
    if(isset($data['type'])){
        switch ($data['type']) {
            case 'cate':
                $filename = JSON_CATE_FILENAME;
                break;
            case 'post':
                $filename = JSON_POST_FILENAME;
                break;
        }
        $msg = ['type' => $data['type']];
    }

    switch ($data['action']) {



        case 'getLogs':


            $msg = array_merge($msg,[
                'wait_id'   => $wait_id,
                'action'    => $data['_id']
            ]);
            switch($data['_id']){


                case 'createFile':

                    $msg['message']	= $sm->generateWaiting("Tạo file ".$filename,$wait_id);
                    echo $sm->jsonEndCodeUtf8($msg);
                    break;

                case 'generateResource':

                    $msg['message'] = $sm->generateWaiting("Khởi tạo dữ liệu cho ".$filename,$wait_id);
                    echo $sm->jsonEndCodeUtf8($msg);
                    break;

                case 'initJSONFile':
                    $msg['message'] = $sm->generateWaiting("Nạp ".$filename,$wait_id);
                    echo $sm->jsonEndCodeUtf8($msg);
                    break;


                case 'exportXML':
                    $msg['message'] = $sm->generateWaiting("Tạo sitemap.xml",$wait_id);
                    echo $sm->jsonEndCodeUtf8($msg);
                    break;

            }

            break;

        case 'checkFileExist':


            $isExist = $sm->checkFileExist($filename);
            $msg = [
                'type'=>$data['type'],
                'isExist'=>$isExist,
            ];
            if($isExist){
                $msg = array_merge($msg,[
                    'message'=>[
                        "Tìm thấy ".$filename
                    ]
                ]);
            }
            else{
                $msg = array_merge($msg,[
                    'message'=>[
                        "Không tìm thấy ".$filename,
                    ]
                ]);
            }
            echo $sm->jsonEndCodeUtf8($msg);
            break;

        case 'createFile':

            $isDone = $sm->create_file($filename);
            $msg = [
                'type' => $data['type'],
                'wait_id' => $data['wait_id'],
                'isDone'=>$isDone
            ];
            if(!$isDone){
                $msg = array_merge($msg,
                    [
                        'message'=>[
                            "Lỗi trong khi tạo file ".$filename,
                            "Bình thường thì không có lỗi này, và nếu có lỗi này thì không hề bình thường. Hiểu chứ?",
                            "Buồn quá thì nghe bài nhạc giải sầu đê, link đây <a target='_blank' href='https://www.youtube.com/watch?v=kJQP7kiw5Fk'>Đết ba xí tô</a>"
                        ]
                    ]
                );

            }
            sleep(1);
            echo $sm->jsonEndCodeUtf8($msg);
            break;

        case 'generateResource':
            switch ($data['type']) {
                case 'cate':
                    $sm->getAllCategoriesByParentId();
                    $resource = $sm->array_cate_url;
                    break;
                case 'post':
                    $sm->getAllPosts();
                    $resource = $sm->array_post_url;
                    break;
            }
            $msg = [
                'wait_id'=>$data['wait_id']
            ];
            if(!empty($resource)){
                $writeData = $sm->writeData($filename, $resource);
                $msg['isDone']=($writeData)?true:false;
            }
            else{

                $msg['isDone']=false;
            }
            sleep(1);
            echo $sm->jsonEndCodeUtf8($msg);
            break;

        case 'initJSONFile':
            $msg = [
                'wait_id'=>$data['wait_id']
            ];


            $msg['isDone'] = ($sm->initJSONFile($filename))?true:false;
            sleep(1);
            echo $sm->jsonEndCodeUtf8($msg);
            break;

        case 'getResourceData':

            if($string = $_SESSION[$filename][$data['item_index']]){

                $msg = [
                    'message'=> $data['item_index'].' - '.$string
                ];
            }
            else{
                $msg = [
                    'isDone'=>true
                ];
            }
            echo $sm->jsonEndCodeUtf8($msg);
            break;

        case 'exportXML':
            $isDone = $sm->exportXML('../sitemap.xml');
            $msg = [
                'isDone'=>$isDone,
                'wait_id'=>$data['wait_id']
            ];
            if($isDone){
                //$msg['message']='Ngon';
			}
            else{
                $msg['message']='Lỗi khi xuất file';
			}
			sleep(1);
			echo $sm->jsonEndCodeUtf8($msg);
            break;

        default:
            break;
    }

}


?>