
<?php

  $sql_tongsp = "SELECT COUNT(id_sanpham) AS tongsp FROM tbl_sanpham;";
  $query_tongsp = mysqli_query($mysqli,$sql_tongsp);
  $sql_tongdanhmuc ="SELECT COUNT(id_danhmuc) AS tongdanhmuc FROM tbl_danhmuc;";
  $query_tongdanhmuc = mysqli_query($mysqli,$sql_tongdanhmuc);
  $sql_tongdh ="SELECT COUNT(id_cart) AS tongdh FROM tbl_cart;";
  $query_tongdh = mysqli_query($mysqli,$sql_tongdh);
  $sql_tongtk ="SELECT COUNT(id_dangky) AS tongtk FROM tbl_dangky;";
  $query_tongtk = mysqli_query($mysqli,$sql_tongtk);
?>
<div class="container">
<div class="row">

				<h1 class="page-header"></h1>

		</div><!--/.row-->
<div class="row" >
<div style="width: 25%">
<?php
while($row = mysqli_fetch_array($query_tongsp)) {
?>
<a href="http://localhost/ivymoda2/web_mysqli/admin/admincp/index.php?action=danhsachsanpham&query=them" style="text-decoration: none">
 <div class="row" style ="background-color: #30a5ff;color: white;border-radius: 10px; 
  margin-right: 10px;height: 100px;align-items: center;">
     <p style ="width: 50%">Tổng số sản phẩm:</p>
     
     <p> <?php echo $row['tongsp'] ?></p>
</div>
</a>
     <?php
 } 
 ?>
 </div>
 <div style="width: 25%">
 <?php
while($row = mysqli_fetch_array($query_tongdanhmuc)) {
?>
<a href="http://localhost/ivymoda2/web_mysqli/admin/admincp/index.php?action=danhsachdanhmuc&query=them" style="text-decoration: none">
 <div class="row" style ="background-color: #ffb53e;color: white;border-radius: 10px; 
  margin-right: 10px;height: 100px;align-items: center;">
     <p style ="width: 50%">Tổng số danh mục: </p>
     
     <p><?php echo $row['tongdanhmuc'] ?></p>
 </div>
</a>
     <?php
 } 
 ?>  
 </div>

 <div style="width: 25%">
  <?php

while($row = mysqli_fetch_array($query_tongdh)) {
?>
<a href="http://localhost/ivymoda2/web_mysqli/admin/admincp/index.php?action=quanlydonhang&query=lietke" style="text-decoration: none">
  <div class="row" style ="background-color: #1ebfae;color: white;border-radius: 10px; 
  margin-right: 10px;height: 100px;align-items: center;">

     <p style ="width: 50%">Tổng số đơn hàng: </p>
 
    <p style ="width: 50%"><?php echo $row['tongdh'] ?></p>
  </div>
</a>
<?php
 } 
 ?>
 </div>
 <div style="width: 25%">
  <?php

while($row = mysqli_fetch_array($query_tongtk)) {
?>
<a href ="http://localhost/ivymoda2/web_mysqli/admin/admincp/index.php?action=quanlytk&query=them" style="text-decoration: none">
<div class="row" style ="background-color: #f9243f;color: white;border-radius: 10px; 
  margin-right: 10px;height: 100px;align-items: center;justify-content: center; ">

     <p style ="width: 50%">Tổng số tài khoản: </p>


     <p style ="width: 50%"><?php echo $row['tongtk'] ?></p>
  
  </div>
</a>
     <?php
 } 
 ?>
 </div>
</div>
</div>