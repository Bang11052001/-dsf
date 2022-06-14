<?php
	$sql_sua_slide = "SELECT * FROM tbl_slide WHERE id='$_GET[id]' LIMIT 1";
	$query_sua_slide = mysqli_query($mysqli,$sql_sua_slide);
?>
<p>Sửa slide</p>
<table border="1" width="100%" style="border-collapse: collapse;">
<?php
while($row = mysqli_fetch_array($query_sua_slide)) {
?>
 <form method="POST" action="modules/quanlyslide/xuly.php?id=<?php echo $row['id'] ?>" enctype="multipart/form-data">
	  
	   <tr>
	  	<td>Hình ảnh</td>
	  	<td>
	  		<input type="file" name="hinh">
	  		<img src="modules/quanlyslide/slide/<?php echo $row['hinh'] ?>" width="150px">
	  	</td>

	  </tr>
	  
	   <tr>
	    <td colspan="2"><input type="submit" name="suaslide" value="Sửa "></td>
	  </tr>
 </form>
 <?php
 } 
 ?>

</table>