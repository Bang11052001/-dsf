<?php
$sql_danhsach_danhmucsp ="SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
$query_danhsach_danhmucsp = mysqli_query($mysqli,$sql_danhsach_danhmucsp); 
?>
<div class="cartegory-list">
    <table>
        <tr>
            <th>Id</th>
            <th>Tên danh mục</th>
            <th>Tùy biến</th>
        </tr>
        <?php
            $i =0;
            while($row = mysqli_fetch_array($query_danhsach_danhmucsp)){
                $i++;

         
        ?>
        <tr>
            <td><?php echo $i ?></td>
            <td><?php echo $row['tendanhmuc'] ?></td>
            <td><a href="?action=danhsachdanhmuc&query=sua&iddanhmuc=<?php echo $row['id_danhmuc']?>">Sửa</a>|<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc']?>">Xóa</a></td>
        </tr>
        <?php
            }
        ?>

    </table>
</div>