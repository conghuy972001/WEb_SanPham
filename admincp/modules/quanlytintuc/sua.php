<?php
	$sql_sua_tintuc = "SELECT * FROM quanlytintuc WHERE id_tintuc='$_GET[idtintuc]' LIMIT 1";
	$query_sua_tintuc = mysqli_query($mysqli,$sql_sua_tintuc);
?>

<h2 style="margin-left: 350px;">Sửa Tin tức</h2>

<body>

<table style="width:70%; height: 120px; border-collapse: collapse;">
	<form method="POST" action="modules/quanlytintuc/xuly.php?idtintuc=<?php echo $_GET['idtintuc']?>">
		<?php
			while($dong = mysqli_fetch_array($query_sua_tintuc)){
		?>

		  <tr>
		    <th>ID Bài</th>
		    <td><input type="text" name="idtintuc" style="width:98%" value="<?php echo $dong['id_tintuc'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Tiêu đề</th>
		    <td><input type="text" name="tentieude" style="width:98%" value="<?php echo $dong['tieude'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Nội dung</th>
		    <td><input type="text" name="noidung" style="width:98%" value="<?php echo $dong['noidung'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Hình Ảnh</th>
		    <td>
		    	<input type="file" name="hinhanh">
		    	<img src="modules/quanlytintuc/uploads/<?php echo $dong['hinhanh'] ?>" width="150px">
		    </td>
		  </tr>
		  <tr>
		    <td colspan="2"><input type="submit" value="Cập nhật Tin Tức" name="suatintuc" style="margin-left: 35%; margin-top: 10px; margin-bottom: 10px; font-size: 20px;"></td>
		  </tr>

		<?php
		}	
		?>
	</form>
</table>
