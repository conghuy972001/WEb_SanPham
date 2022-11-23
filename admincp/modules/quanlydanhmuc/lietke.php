<?php
	$sql_lietke_danhmuc = "SELECT * FROM quanlydanhmuc ORDER BY id_danhmuc ASC";
	$query_lietke_danhmuc = mysqli_query($mysqli,$sql_lietke_danhmuc);
?>

<h2 style="text-align: center;">Liệt kê Danh Mục Sản Phẩm</h2>

<table style="width:100%; border-collapse: collapse;">
  <tr>
    <th>ID danh mục</th>
    <th>Tên Danh mục</th>
    <th>Thứ tự danh mục</th>
  </tr>
  <tr>
  <?php
  $i =0;
  while ($row = mysqli_fetch_array($query_lietke_danhmuc)){
  	$i++;
  ?>
  </tr>
  <tr>
    <td><?php echo $row['id_danhmuc'] ?></td>
    <td><?php echo $row['ten_danhmuc'] ?></td>
    <td><?php echo $row['thutu_danhmuc'] ?></td>

    <td><a href="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Xóa</a>  |  <a href="?action=quanlydanhmuc&query=suadm&iddanhmuc=<?php echo $row['id_danhmuc'] ?>">Sửa</a></td>
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
