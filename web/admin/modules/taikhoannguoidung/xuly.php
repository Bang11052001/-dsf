<?php

$tenkhachhang = $_POST['tenkhachhang'];
$email = $_POST['email'];
$diachi = $_POST['diachi'];
$dienthoai = $_POST['dienthoai'];
//xuly hinh anh

include('../../config/config.php');
if(isset($_POST['suataikhoan'])){
	//sua
    $sql_update = "UPDATE tbl_dangky SET tenkhachhang='".$tenkhachhang."',email='".$email."',diachi='".$diachi."',dienthoai='".$dienthoai."' WHERE id_dangky='$_GET[iddangky]'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlytk&query=them');
}
else{
	$id=$_GET['iddangky'];
	$sql_xoa = "DELETE FROM tbl_dangky WHERE id_dangky='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlytk&query=them');
}

?>