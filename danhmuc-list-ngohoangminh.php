<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách nhân viên ngohoangminh</title>
</head>
<body>
    <?php
      include("ketnoi-NHM-day11.php");
      $sql_NHM="SELECT * FROM `danh mục` WHERE 1=1";
      $result_NHM=$conn_NHM->query($sql_NHM);
    ?>
    <section class="container">
    <h1>danh sách danh mục- ngohoangminh</h1>
    <hr/>
      <a href="danhmuc-create-ngohoangminh.php" class="btn">thêm mới danh mục</a>
    <table border="1px" width="100%">
      <thead>
        <tr>
           <th>stt</th>
           <th>mã danh mục</th>
           <th> tên danh mục</th>
           <th>trạng thái </th>
        </tr>
      </thead>
   <tbody>
    <?php
     $stt_NHM=0;
     while($row_NHM=$result_NHM->fetch_array()) { 
        $stt_NHM++;
    ?>
        <tr>
            <td><?php echo $stt_NHM; ?></td>
            <td><?php echo $row_NHM["MADM_NHM"];?></td>
            <td><?php echo $row_NHM["TENDM_NHM"]; ?></td>
            <td><?php echo $row_NHM["TRANGTHAI_NHM"]; ?></td>
            <td>
              <a href="danhmuc-edit-ngohoangminh.php?MADM_NHM=<?php echo $row_NHM["MADM_NHM"];?>">sửa</a>
              <a href="danhmuc-list-ngohoangminh.php?MADM_NHM=<?php echo $row_NHM["MADM_NHM"];?>">xóa</a>
            </td>
        </tr>
    <?php
     } 
    ?>
   </tbody>
</table>
<a href="danhmuc-create-ngohoangminh.php" class="btn">thêm mới danh mục</a>
</section>
</body>
</html>
