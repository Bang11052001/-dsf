

<?php

  if(isset($_SESSION['cart'])){

  
?>

<section class="cart">
    <div class="container">
      
            <div class="row">
                <div class="col-lg-8 col-12">
                <P>Gio hang</P>

<?php
  if(isset($_SESSION['dangky'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
   
  } 
  ?>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>Mã sp</th>
                            <th>Tên sp</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>THÀNH TIỀN</th>
                            <th>Quản lý</th>
                        </tr>
                        <?php
                        if(isset($_SESSION['cart'])){
                          $i = 0;
                          $tongtien = 0;
                          foreach($_SESSION['cart'] as $cart_item){
                            $thanhtien = $cart_item['soluong']*$cart_item['giasp'];
                              $tongtien+=$thanhtien;
                          $i++;

                        ?>

                        <tr>
                            <td ><?php echo $i; ?>
                               
                            </td>
                            <td><?php echo $cart_item['masp']; ?></td>
                            <td><?php echo $cart_item['tensanpham']; ?></td>
                            <td><img src="../admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
                            <td>
                            <a href="main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
                            <?php echo $cart_item['soluong']; ?>
                            <a href="main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

                          </td>

                          <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
                          <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
                          <td><a href="main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></
                        </tr>
                        
                  
                    <?php
    }
  }
?> 
 </table>
                </div>
                <div class="col-lg-4">
                    <table style="margin-bottom:20px; ">
                        <tr>
                            <th class="th1" colspan="2">TỔNG TIỀN GIỎ HÀNG</th>
                        </tr>
                        <tr>
                            <th>TỔNG SẢN PHẨM </th>
                            <td style="float: right;"></td>
                        </tr>
                        <tr>
                            <th>TỔNG TIỀN HÀNG</th>
                            <td style="float:right"><?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/></td>
                        </tr>
                        <tr class="th3">
                            <th>THÀNH TIỀN</th>
                            <td style="float:right"><?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/></td>
                        </tr>
                        <tr>
                            <th>TẠM TÍNH</th>
                            <td style="float:right;font-weight: bold;"><?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/></td>
                        </tr>


                    </table>
                    <div class="cart-bottom">
                         
                    <?php
                            if(isset($_SESSION['dangky'])){
                            ?>
                            <p><a href="main/thanhtoan.php">Đặt hàng</a></p>
                        <?php
                            }else{
                        ?>
                            <p><a href="index.php?quanly=dangky">Đăng lý đặt hàng</a></p>
                        <?php
                            }
                        ?>
      
                    </div>
                    <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>
                </div>
            </div>

        </div>
</section>

