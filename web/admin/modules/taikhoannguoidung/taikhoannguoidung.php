<p>Liệt kê tài khoản người dùng</p>
<?php
	$sql_lietke_tk = "SELECT * FROM tbl_dangky  ORDER BY id_dangky DESC";
	$query_lietke_tk = mysqli_query($mysqli,$sql_lietke_tk);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Tên khách hàng</th>
    <th>Email</th> 
    <th>Địa chỉ</th>
    <th>Số điện thoại</th>
    <th>Quản lý</th>

  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_tk)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td><a href="?action=quanlytk&query=sua&iddangky=<?php echo $row['id_dangky']?>">Sửa</a>|<a href="modules/taikhoannguoidung/xuly.php?iddangky=<?php echo $row['id_dangky']?>">Xóa</a></td>
   
   
  </tr>
  <?php
  } 
  ?>
 
</table>