<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm - ngohoangminh</title>
</head>
<body>
    <?php
      include("ketnoi-NHM-day11.php");
      $sql_NHM="SELECT * FROM `danh mục` WHERE 1=1";
      $result_NHM=$conn_NHM->query($sql_NHM);
    ?>
    <section class="container">
    <h1>danh sách sanpham - ngohoangminh</h1>
    <hr/>
      <a href="sanpham-create-ngohoangminh.php" class="btn">thêm mới danh mục</a>
    <table border="1px" width="100%">
      <thead>
        <tr>
           <th>stt</th>
           <th>sản phẩm id</th>
           <th>tên sản phẩm</th>
           <th> số lượng</th>
           <th>giá mua</th>
           <th>giá bán</th>
           <th>trạng thái </th>
           <th>mã danh mục</th>
        </tr>
      </thead>
   <tbody>
    <?php
     $stt_NHM=0;
     while($row_NHM=$result_NHM->fetch_array());
     $stt_NHM++;
    ?>
        <tr>
            <td><?php echo $stt_NHM; ?></td>
            <td><?php echo $row_NHM["SPID_NHM"];?></td>
            <td><?php echo $row_NHM["TENSP_NHM"]; ?></td>
            <td><?php echo $row_NHM["SOLUONG_NHM"];?></td>
            <td><?php echo $row_NHM["GIAMUA_NHM"]; ?></td>
            <td><?php echo $row_NHM["GIABAN_NHM"];?></td>
            <td><?php echo $row_NHM["TRANGTHAI_NHM"]; ?></td>
            <td><?php echo $row_NHM["MADM_NHM"];?></td>
            <td>
              <a href="sanpham-edit-ngohoangminh.php?MADM_NHM=<?php echo $row_NHM["SPID_NHM"];?>">sửa</a>
              <a href="sanpham-list-ngohoangminh.php?MADM_NHM=<?php echo $row_NHM["SPID_NHM"];?>">xóa</a>
            </td>
        </tr>
   </tbody>
</table>
<a href="sanpham-create-ngohoangminh.php" class="btn">thêm mới danh mục</a>
</section>
</body>
</html>