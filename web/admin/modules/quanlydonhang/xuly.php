<?php

$soluongmua = $_POST['soluongmua'];
	include('../../config/config.php');
	if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE tbl_cart SET cart_status=0 WHERE code_cart='".$code_cart."'";
		$query = mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	} 
	elseif(isset ($_GET['idcartdetails'])){
	
		$id_cart_details = $_GET['idcartdetails'];
	$sql_xoa = "DELETE FROM tbl_cart_details WHERE id_cart_details='".$id_cart_details."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}
	elseif(isset($_POST['suasoluong1'])){
		//sua
		$sql_update = "UPDATE tbl_cart_details SET soluongmua='".$soluongmua."' WHERE id_cart_details='$_GET[idcartdetails]'";
		mysqli_query($mysqli,$sql_update);
		header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}
	else{
		$id_cart = $_GET['idcart'];
	$sql_xoa = "DELETE FROM tbl_cart WHERE id_cart='".$id_cart."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydonhang&query=lietke');
	}
?>