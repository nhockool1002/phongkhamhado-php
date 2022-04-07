<?php
    switch ($p)
    {
        case "trangchitiet":
            $TieuDeKD = $_GET['TieuDeKD'];
            $TieuDeKD = $qly_tin->XoaDinhDang ($TieuDeKD);
            $idPa = $qly_pa->LayID($TieuDeKD);
            if ( $idPa > 0){
                $title = $qly_pa->LayTitle($idPa);
            }    
            else{
                $idTT = $qly_tin->LayID($TieuDeKD);
                $title = $qly_tin->LayTitle($idTT);                
            }
            break;

        case "trangloai":
            $TieuDeKD = $_GET['TieuDeKD'];
            $TieuDeKD = $qly_loai->XoaDinhDang ($TieuDeKD);
            $idLoai = $qly_loai->LayID($TieuDeKD);
            $title1 = $qly_loai->LayTitle($idLoai);
            if(isset($_GET['pageNum']) && $_GET['pageNum'] > 1){
                $title = $title1.' || Trang '.$_GET['pageNum'];
            }else{
                $title = $title1;
            }
            break;
            
        default:
            $title = "Phòng khám đa khoa Đông Á";
            break;

    }
    if ($title == ""){
        $title = "Phòng khám đa khoa Đông Á";
    }
?>

<?php
    switch ($p)
    {
        case "trangchitiet":
            $TieuDeKD = $_GET['TieuDeKD'];
            $TieuDeKD = $qly_tin->XoaDinhDang ($TieuDeKD);
            $idPa = $qly_pa->LayID($TieuDeKD);
            if ( $idPa > 0){
                $keywords = $qly_pa->LayKeyword($idPa);
            }
            else{
                $idTT = $qly_tin->LayID($TieuDeKD);
                $keywords = $qly_tin->LayKeyword($idTT);
            }
            break;

        case "trangloai":
            $TieuDeKD = $_GET['TieuDeKD'];
            $TieuDeKD = $qly_loai->XoaDinhDang ($TieuDeKD);
            $idLoai = $qly_loai->LayID($TieuDeKD);
            $keywords = $qly_loai->LayKeyword($idLoai);
            break;
            
        default:
            $keywords = "Phòng khám đa khoa Đông Á";
            break;

    }
    if ($keywords == ""){
        $keywords = "Phòng khám đa khoa Đông Á";
    }
?>

<?php
    switch ($p)
    {
        case "trangchitiet":
            $TieuDeKD = $_GET['TieuDeKD'];
            $TieuDeKD = $qly_tin->XoaDinhDang ($TieuDeKD);
            $idPa = $qly_pa->LayID($TieuDeKD);
            if ( $idPa > 0){
                $description = $qly_pa->LayDes($idPa);
            }    
            else{
                $idTT = $qly_tin->LayID($TieuDeKD);
                $description = $qly_tin->LayDes($idTT);                
            }
            break;

        case "trangloai":
            $TieuDeKD = $_GET['TieuDeKD'];
            $TieuDeKD = $qly_loai->XoaDinhDang ($TieuDeKD);
            $idLoai = $qly_loai->LayID($TieuDeKD);
            $description = $qly_loai->LayDes($idLoai);
            break;
            
        default:
            $description = "Phòng khám đa khoa Đông Á";
            break;

    }
    if ($description == ""){
        $description = "Phòng khám đa khoa Đông Á";
    }
    
?>