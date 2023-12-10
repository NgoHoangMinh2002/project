<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
        if(isset($_GET["madm_NHM"])){
            $madm_NHM = $_GET["madm_NHM"];     
            $sql_delete_NHM = "DELETE FROM danhmuc_NHM WHERE MADM_NHM='$madm_NHM'";
            if($conn_NHM->query($sql_delete_NHM)){
                header("Location:danhmuc-list-ngohoangminh.php");
            }else{
                echo "<script> alert('lỗi xóa'); </script>";
            }
        }
    ?>
</body>
</html>