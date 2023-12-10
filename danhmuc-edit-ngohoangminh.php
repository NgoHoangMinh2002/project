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
        $MADM_NHM=$_post["MADM_NHM"];
        $TENDM=$_post["TENDM_NHM"];
        $TRANGTHAI=$_post["TRANGTHAI_NHM"];
        $sql="INSERT INTO danhmuc_NHM(MADM_NHM,TENDM_NHM,TRANGTHAI_NHM) ";
        $sql .="VALUES($MADM_NHM,$TENDM_NHM,$TRANGTHAI_NHM)";
        // echo $sql;
        // die();
        if($connect->query($sql)){
           header("location:danhmuc-list-ngohoangminh.php");
        }else{
            $errer="lỗi thêm mới,". $connect->errer;
        }
     }
    ?>
</body>
</html>