<?php
	$sql_pro = "SELECT * FROM tbl_sanpham WHERE tbl_sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
<section class="category ">
    <div class="container">

        <h2>Trang chủ &#8594; Nữ &#8594; Hàng nữ mới về</h2>
        <div class="row">

            <div class="col-lg-2">
                <div class="category-list">
                    <ul>
                        <li><a href="">NỮ</a></li>
                        <li><a href="">NAM</a></li>
                        <li><a href="">TRẺ EM</a></li>
                        <li><a href="">FINAL SALE</a></li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-10  row">
                <div id="category-left" class="col-lg-6">
                    <p><?php echo $row_title['tendanhmuc'] ?></p>
                </div>
                <div id="category-right" class="col-lg-6">
                    <button>Bộ lọc <span1><i class="fas fa-caret-down"></i></span1></button>
                    <button>Sắp xếp <i class="fas fa-caret-down"></i></button>

                </div>
                <div id="category-img" class="col-lg-12 row">
                    <?php
					while($row_pro = mysqli_fetch_array($query_pro)){ 
					?>
                    <div class="col-lg-3">
                    <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
							<img src="../admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>">
							<p class="title_product">Tên sản phẩm : <?php echo $row_pro['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ' ?></p>
						</a>
                    </div>
                    <?php
					} 
					?>

                </div>

            </div>

        </div>

</section>