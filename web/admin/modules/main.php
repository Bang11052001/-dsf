 <div class="web-content">
<?php
if(isset($_GET['action']) && $_GET['query']){
    $tam = $_GET['action'];
    $query = $_GET['query'];
}else{
    $tam = '';
    $query = '';
}
if($tam =="tsxdanhmuc" && $query =='them'){
    include("modules/quanlydanhmucsp/them.php ");
}elseif($tam=="danhsachdanhmuc" && $query =='them'){
    include("modules/quanlydanhmucsp/danhsach.php");
}elseif($tam=="danhsachdanhmuc" && $query =='sua'){
    include("modules/quanlydanhmucsp/sua.php");
}elseif($tam=="tsxsanpham" && $query =='them'){
    include("modules/quanlysp/them.php");
}elseif($tam=="danhsachsanpham" && $query =='them'){
    include("modules/quanlysp/danhsach.php");
}elseif($tam=="danhsachsanpham" && $query =='sua'){
    include("modules/quanlysp/sua.php");
}elseif($tam=='quanlydonhang' && $query=='lietke'){
    include("modules/quanlydonhang/lietke.php");
}elseif($tam=='donhang' && $query=='xemdonhang'){
    include("modules/quanlydonhang/xemdonhang.php");
}elseif($tam=='thongke' && $query=='them'){
    include("modules/thongke/thongke.php");
}elseif($tam=='quanlytk' && $query=='them'){
    include("modules/taikhoannguoidung/taikhoannguoidung.php");
}elseif($tam=='quanlytk' && $query=='sua'){
    include("modules/taikhoannguoidung/sua.php");
}elseif($tam=='quanlydonhang' && $query=='sua'){
    include("modules/quanlydonhang/sua.php");
}elseif($tam=='tsxslideanh' && $query=='them'){
    include("modules/quanlyslide/them.php");
}elseif($tam=='danhsachslide' && $query=='them'){
    include("modules/quanlyslide/danhsachslide.php");
}elseif($tam=='danhsachslide' && $query=='sua'){
    include("modules/quanlyslide/sua.php");
}else{
    include("modules/dashboard.php");
}
?>
 </div>