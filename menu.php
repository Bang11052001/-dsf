<?php

	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	
	    		
?>
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>
<div class="col-lg-2 col-md-12">
    <div class="head-logo">
        <a href="index.php"><img src="https://pubcdn.ivymoda.com/images/logo.png"></a>
    </div>
</div>
<div class="col-lg-7">
    <div classs="menu " style="display: flex;">
        <li><a href="">NỮ</a>
            <ul class="sub-menu">

                <?php 
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
				?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc']?></a></li>
                <?php
                }
                ?>
            </ul>

        </li>
        <li><a href="">NAM</a></li>
        <li><a href="">TRẺ EM</a></li>
        <li><a href="">FINAL SALE</a></li>
        <li><a href="">BỘ SƯU TẬP</a></li>
        <li><a href="">TIN TỨC</a></li>
        <li><a href="">THÔNG TIN</a></li>
        <li><a href="">Hotline</a></li>
        <?php
				if(isset($_SESSION['dangky'])){ 

				?>
				<li><a href="index.php?dangxuat=1">ĐĂNG XUẤT    </a></li>
				
				<?php
				}else{ 
				?>
				<li><a href="index.php?quanly=dangky">ĐĂNG Ký</a></li>
				<?php
				} 
				?>
				


    </div>
</div>
<!--search-->
<div class="col-lg-2 col-sm-12">
    <div class="search">
        <form action="index.php?quanly=timkiem" method ="POST">
        <span><input name ="tukhoa" class="txt1" type="text" placeholder="Tìm kiếm ..."><button type="submit" name ="timkiem" style="background: transparent;border:none"><i  class="fas fa-search" "></i></button</span>
        </form>
    </div>
</div>
<!--icon-->
<div class="col-lg-1">
    <div class="icon">
        <a href=""><i class="fas fa-paw"></i></a>
        <a href='index.php?quanly=dangky'><i class="fas fa-user"></i></a>
        <a href="index.php?quanly=giohang"><i class="fas fa-shopping-cart"></i></a>
    </div>
</div>
</div>
</div>
</section>
</header>