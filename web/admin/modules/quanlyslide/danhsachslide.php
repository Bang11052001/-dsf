<p>Liệt kê tài khoản người dùng</p>
<?php
	$sql_lietke_slide = "SELECT * FROM tbl_slide  ";
	$query_lietke_slide = mysqli_query($mysqli,$sql_lietke_slide);
?>
<table style="width:100%" border="1" style="border-collapse: collapse;">
  <tr>
  	<th>Id</th>
    <th>Hình</th>
    <th>Tùy biến</th>

  
  </tr>
  <?php
  $i = 0;
  while($row = mysqli_fetch_array($query_lietke_slide)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><img src ="modules/quanlyslide/slide/<?php echo $row['hinh']?>" width = "150px"></td>
   
    <td><a href="?action=danhsachslide&query=sua&id=<?php echo $row['id']?>">Sửa</a>|<a href="modules/quanlyslide/xuly.php?id=<?php echo $row['id']?>">Xóa</a></td>
   
   
  </tr>
  <?php
  } 
  ?>
 
</table>