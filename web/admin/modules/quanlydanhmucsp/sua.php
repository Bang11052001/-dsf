<?php
$sql_sua_danhmucsp ="SELECT * FROM tbl_danhmuc WHERE id_danhmuc ='$_GET[iddanhmuc]' LIMIT 1";
$query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp); 
?>
<div class="cartegory-add">
                <h2>Thêm danh mục</h2>
                <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
                    <?php
                    while ($dong = mysqli_fetch_array($query_sua_danhmucsp)){
                    ?>
                    Danh mục: <input class='ip1' name="tendanhmuc" type="text" placeholder value ="<?php echo $dong['tendanhmuc'] ?>"="Nhập tên danh mục"><br>
                    Thứ tự: <input class='ip2' name="thutu" type="text" placeholder="Nhập thứ tự" value "<?php echo $dong['thutu'] ?>"><br>
                    <button type="submit" name ="suadanhmuc">Sửa</button>
                    <?php
                    }
                    ?>
                </form>
                
               
    </div>
    <style>
        .ip1{
            margin-left: 10px;
        }
        .ip2{
            margin-left: 35px;
        }
    </style>