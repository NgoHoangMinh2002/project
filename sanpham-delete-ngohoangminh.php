<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        //  xử lý với chức năng xóa
        if(isset($_GET["spid_NHM"])){
            // thực hiện xóa sản phẩm theo proid_NHM
            $spid_NHM = $_GET["spid_NHM"];
            // tạo truy vấn xóa
            $sql_delete_NHM = "DELETE FROM sanpham_NHM WHERE SPID_NHM='$spid_NHM'";
            // Thực thi truy vấn
            if($conn_NHM->query($sql_delete_NHM)){
                header("Location:sanpham-list-ngohoangminh.php");
            }else{
                echo "<script> alert('lỗi xóa'); </script>";
            }
        }
    ?>
</body>
</html>