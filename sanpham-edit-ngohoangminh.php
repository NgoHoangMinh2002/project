<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $error='';
     if(isset($_post["btnNHMthemmoi"])){
        include("ketnoi-NHM-day11.php");
        $SPID_NHM=$_post["SPID_NHM"];
        $TENSP_NHM=$_post["TENSP_NHM"];
        $SOLUONG_NHM=$_post["SOLUONG_NHM"];
        $GIAMUA_NHM=$_post["GIAMUA_NHM"];
        $GIABAN_NHM=$_post["GIABAN_NHM"];
        $TRANGTHAI=$_post["TRANGTHAI_NHM"];
        $MADM_NHM=$_post["MADM_NHM"];
        $sql="INSERT INTO danhmuc_NHM(SPID_NHM,TENSP_NHM,SOLUONG_NHM,GIAMUA_NHM,GIABAN_NHM,TRANGTHAI_NHM,MADM_NHM) ";
        $sql .="VALUES($SPID_NHM,$TENSP_NHM,$SOLUONG_NHM,$GIAMUA_NHM,$GIABAN_NHM,$TRANGTHAI_NHM, $MADM_NHM)";
        // echo $sql;
        // die();
        if($connect->query($sql)){
           header("location:sanpham-list-ngohoangminh.php");
        }else{
            $errer="lỗi thêm mới,". $connect->errer;
        }
     }
    ?>
</body>
</html>