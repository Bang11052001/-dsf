<?php

	$sql_sua_solg = "SELECT * FROM tbl_cart_details WHERE id_cart_details='$_GET[idcartdetails]' LIMIT 1";
	$query_sua_solg = mysqli_query($mysqli,$sql_sua_solg);
?>
<p>Sửa sl</p>
<table border="1" width="100%" style="border-collapse: collapse;">

 <form method="POST" action="modules/quanlydonhang/xuly.php?idcartdetails=<?php echo $row['id_cart_details'] ?>" >
	  <tr>
		  <?php
		while($row = mysqli_fetch_array($query_sua_solg)) {
		?>
	  	<td>So luong</td>
	  	<td><input type="text" value="<?php echo $row['soluongmua'] ?>" name="soluongmua"></td>
	  </tr>
	   <tr>
	    <td colspan="2"><input type="submit" name="suasoluong1" value="Sửa "></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>