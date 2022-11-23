<?php
	$sql_lietke_sanpham = "SELECT * FROM danhmuc,quanlydanhmuc WHERE danhmuc.id_danhmuc = quanlydanhmuc.id_danhmuc ORDER BY thutu DESC";
	$query_lietke_sanpham = mysqli_query($mysqli,$sql_lietke_sanpham);
?>

<h2 style="text-align: center;">Liệt kê sản phẩm</h2>

<table style="width:100%; border-collapse: collapse;">
  <tr>
  	<th>Mã SP</th>
    <th>Tên sản phẩm</th>
    <th>Giá</th>
    <th>Số Lượng</th>
    <th>Danh mục</th>
    <th>Nội dung</th>
    <th>Thứ tự</th>
    <th>Ảnh</th>
    <th>Tình Trạng</th>
  </tr>
  <tr>
  <?php
  $i =0;
  while ($row = mysqli_fetch_array($query_lietke_sanpham)){
  	$i++;
  ?>
  </tr>
  <tr>
  	<td><?php echo $row['ma_sp'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['ten_danhmuc'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><?php echo $row['thutu'] ?></td>
    <td><img src="modules/quanlysanpham/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>
    <td><?php 
      if ($row['tinhtrang']==1){
        echo 'Hiện';
      }else{
        echo 'Ẩn';
      }
    ?></td>
    <td><a href="modules/quanlysanpham/xuly.php?masanpham=<?php echo $row['ma_sp'] ?>">Xóa</a>  |  <a href="?action=quanlysanpham&query=suasp&masanpham=<?php echo $row['ma_sp'] ?>">Sửa</a></td>
  </tr>
  <?php
  }
  ?>
</table>

<style>
table, th, td {
  border:1px solid black;
}
</style>
