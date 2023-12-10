<?php
$conn_NHM=new mysqli("localhost","root","","k22cntt3_ngohoangminh_2201900044");
// echo $conn_NHM;
if($conn_NHM->errno){
    echo"<h2> lỗi: ". mysqli_error($conn_NHM) ."</h2>";
}else{
    echo"<h2>ngohoangminh_2201900044</h2>";
}
?>
<style>
      .container{
        margin: 1rem 10%;
        padding: .5rem 1rem;
        border: 1px solid #ccc;
      }
      .btn{
        border: 1px solid red;
        border-radius: 5px;
        padding: .5rem 1rem;
        display: inline-block;
        margin: .5rem 0;
      }
      </style>
