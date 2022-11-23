<?php
	$sql_sua_danhmuc = "SELECT * FROM quanlydanhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
	$query_sua_danhmuc = mysqli_query($mysqli,$sql_sua_danhmuc);
?>

<h2 style="margin-left: 350px;">Sửa Danh Mục</h2>

<body>

<table style="width:70%; height: 120px; border-collapse: collapse;">
	<form method="POST" action="modules/quanlydanhmuc/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
		<?php
			while($dong = mysqli_fetch_array($query_sua_danhmuc)){
		?>

		  <tr>
		    <th>ID danh mục</th>
		    <td><input type="text" name="iddanhmuc" style="width:98%" value="<?php echo $dong['id_danhmuc'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Tên danh mục</th>
		    <td><input type="text" name="tendanhmuc" style="width:98%" value="<?php echo $dong['ten_danhmuc'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Thứ tự danh mục</th>
		    <td><input type="text" name="thutudanhmuc" style="width:98%" value="<?php echo $dong['thutu_danhmuc'] ?>"></td>
		  </tr>
		  <tr>
		    <td colspan="2"><input type="submit" value="Cập nhật Danh Mục" name="suadanhmuc" style="margin-left: 35%; margin-top: 10px; margin-bottom: 10px; font-size: 20px;"></td>
		  </tr>

		<?php
		}	
		?>
	</form>
</table>

