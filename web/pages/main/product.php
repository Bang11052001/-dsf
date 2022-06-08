<?php
    $sql_chitiet = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
    $query_chitiet = mysqli_query($mysqli,$sql_chitiet);
    while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<section class="product">
    <div class="container">
        
           
	<form class="rowl" method="POST" action="main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
                 <div class="col-lg-6">
                <p>Danh mục sp: <?php echo $row_chitiet['tendanhmuc'] ?></p>
                <img id="big-img" class="hero-img" "
                src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
                </div>
                <div class="col-lg-1">
                    
                </div>
                <div class="col-lg-5">
                    <div class="product-name">
                        <h3><?php echo $row_chitiet['tensanpham'] ?></h3>
                        <p><?php echo $row_chitiet['masp'] ?></p>
                    </div>

                    <p1>
                        <p>Giá sp: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ' ?></p>
                    </p1>
                  
                    
                    <div class="product-number">
                        <p>Số lượng sp: <?php echo $row_chitiet['soluong'] ?></p>

                    </div>
                  <!--   <p style="color: red;font-size: 14px;">Vui lòng chọn size <sup>*</sup></p> -->
                    
                    <p><input class="themgiohang" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
                
                    <div class=" product-icon">
                        <p><i class="fas fa-phone"></i> Hotline</p>
                        <p><i class="fas fa-comments"></i> Chat</p>
                        <p><i class="fas fa-envelope"></i> Mail</p>
                    </div>
                    <div class="product-line">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <br>
                    <div>
                    <p><?php echo $row_chitiet['tomtat'] ?></p>
                    <p><?php echo $row_chitiet['noidung'] ?></p>
                    </div>
                </div>
            </form>

       
</section>
<?php
    }
    ?>


