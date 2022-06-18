<?php
	$sql_sua_tk = "SELECT * FROM tbl_dangky WHERE id_dangky='$_GET[iddangky]' LIMIT 1";
	$query_sua_tk = mysqli_query($mysqli,$sql_sua_tk);
?>
<p>Sửa tài khoản người dùng</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_tk)) {
?>
 <form method="POST" action="modules/taikhoannguoidung/xuly.php?iddangky=<?php echo $row['id_dangky'] ?>" >
	  <tr>
	  	<td>Tên khách hàng</td>
	  	<td><input type="text" value="<?php echo $row['tenkhachhang'] ?>" name="tenkhachhang"></td>
	  </tr>
	   <tr>
	  	<td>Email</td>
	  	<td><input type="text" value="<?php echo $row['email'] ?>" name="email"></td>
	  </tr>
	  <tr>
	  	<td>Địa chỉ</td>
	  	<td><input type="text" value="<?php echo $row['diachi'] ?>" name="diachi"></td>
	  </tr>
	  <tr>
	  	<td>Điện thoại</td>
	  	<td><input type="text" value="<?php echo $row['dienthoai'] ?>" name="dienthoai"></td>
	  </tr>
	  
	
	   <tr>
	    <td colspan="2"><input type="submit" name="suataikhoan" value="Sửa tài khoản"></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>