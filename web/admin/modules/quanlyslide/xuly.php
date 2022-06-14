<?php

//xuly hinh anh
$hinh = $_FILES['hinh']['name'];
$hinh_tmp = $_FILES['hinh']['tmp_name'];
$hinh = time().'_'.$hinh;
include('../../config/config.php');

if(isset($_POST['themslide'])){
	//them
    $sql_them = "INSERT INTO tbl_slide(hinh) VALUE('".$hinh."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinh_tmp,'slide/'.$hinh);
	header('Location:../../index.php?action=tsxslideanh&query=them');
}
elseif(isset($_POST['suaslide'])){
	//sua
	if($hinh!=''){
		move_uploaded_file($hinh_tmp,'slide/'.$hinh);
		
		$sql_update = "UPDATE tbl_slide SET hinh='".$hinh."' WHERE id='$_GET[id]'";
		//xoa hinh anh cu
		$sql = "SELECT * FROM tbl_slide WHERE id = '$_GET[id]' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('slide/'.$row['hinh']);
		}

	}else{
		$sql_update = "UPDATE tbl_sanpham SET tensanpham='".$tensanpham."',masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'";
	}
	mysqli_query($mysqli,$sql_update);
    header('Location:../../index.php?action=danhsachslide&query=them');
}
else{
	$id=$_GET['id'];
	$sql_xoa = "DELETE FROM tbl_slide WHERE id='".$id."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=danhsachslide&query=them');
}

?>