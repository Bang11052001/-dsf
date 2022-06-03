<?php
if(isset($_GET['quanly'])){
    $tam = $_GET['quanly'];
}else{
    $tam ='';
}
if($tam =='danhmucsanpham'){
    include("main/cartegory.php");
}elseif($tam=="cacsanpham"){
    include("main/product.php");
}elseif($tam=="muahang"){
    include("main/cart.php");
}elseif($tam=="thanhtoan"){
    include("main/delivery.php");
}elseif($tam=="sanpham"){
    include("main/product.php");
}elseif($tam=='giohang'){
    include("main/cart.php");
}elseif($tam=='timkiem'){
    include("main/timkiem.php");
}elseif($tam=='dangky'){
    include("main/dangky.php");
}elseif($tam=='dangnhap'){
    include("main/dangnhap.php");
}elseif($tam=='thanhtoan'){
    include("main/thanhtoan.php");
}elseif($tam=='camon'){
    include("main/camon.php");
}else{
    include("main/index.php");
}
?>