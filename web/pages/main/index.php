<?php
	$sql_lietke_slide = "SELECT * FROM tbl_slide  ";
  $sql_lietke_slide1 = "SELECT * FROM tbl_slide  where id =22";
	$query_lietke_slide = mysqli_query($mysqli,$sql_lietke_slide);
  $query_lietke_slide1 = mysqli_query($mysqli,$sql_lietke_slide1);
?>

<section class="hero-img">
    <?php            
      while($row = mysqli_fetch_array($query_lietke_slide1)){
     ?>                 
    <img id ="anh" onclick="doianh()" src="../admincp/modules/quanlyslide/slide/<?php echo $row['hinh'] ?>" >
    <?php
      }         
    ?>                   
</section>                                  
   
   