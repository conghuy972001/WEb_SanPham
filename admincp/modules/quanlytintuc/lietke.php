<?php
	$sql_lietke_tintuc = "SELECT * FROM quanlytintuc ORDER BY id_tintuc ASC";
	$query_lietke_tintuc = mysqli_query($mysqli,$sql_lietke_tintuc);
?>

<h2 style="text-align: center;">Liệt kê Tin tức</h2>

<table style="width:100%; border-collapse: collapse;">
  <tr>
    <th>ID Bài</th>
    <th>Tiêu đề</th>
    <th>Nội Dung</th>
    <th>Hình Ảnh</th>

  </tr>
  <tr>
  <?php
  $i =0;
  while ($row = mysqli_fetch_array($query_lietke_tintuc)){
  	$i++;
  ?>
  </tr>
  <tr>
    <td><?php echo $row['id_tintuc'] ?></td>
    <td><?php echo $row['tieude'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
    <td><img src="modules/quanlytintuc/uploads/<?php echo $row['hinhanh'] ?>" width="150px"></td>

    <td><a href="modules/quanlytintuc/xuly.php?idtintuc=<?php echo $row['id_tintuc'] ?>">Xóa</a>  |  <a href="?action=quanlytintuc&query=suatt&idtintuc=<?php echo $row['id_tintuc'] ?>">Sửa</a></td>
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
