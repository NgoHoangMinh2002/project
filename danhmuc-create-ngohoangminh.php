<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     include("ketnoi-NHM-day11.php");
     $sql_pb_NHM="SELECT * FROM `danh mục` WHERE 1=1";
     $result_pb_NHM=$conn_NHM->query($sql_pb_NHM);
    ?>
    <section class="container">
        <h1>thêm mới thông tin</h1>
        <table border="1px" width="100%">
            <tbody>
            <tr>
              <td>mã danh mục</td>
              <td>
                <input type="text" name="MADM_NHM" id="MADM_NHM">
              </td>
            </tr>
            <tr>
              <td>tên danh mục</td>
              <td>
                <input type="text" name="TENDM_NHM" id="TENDM_NHM">
              </td>
            </tr>
            <tr>
              <td>trạng thái </td>
              <td>
              <select name="TRANGTHAI_NHM" id="TRANGTHAI_NHM">
                   <option value="1" selected >hoạt động</option>
                   <option value="2" selected >tạm dừng</option>
                </select>
              </td>
            </tr>
            <tr>
                <td></td>
              <td>
                 <input type="submit" value="thêm mới" name="btnNHMthemmoi"/>
                 <input type="reset" value="làm lại" name="btnNHMlamlai"/>
              </td>
            </tr>
</tbody>
</table>
<a href="danhmuc-list-ngohoangminh.php">danh sách danh mục</a>
</body>
</html>