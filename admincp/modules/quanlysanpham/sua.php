<?php
	$sql_sua_sanpham = "SELECT * FROM danhmuc WHERE ma_sp='$_GET[masanpham]' LIMIT 1";
	$query_sua_sanpham = mysqli_query($mysqli,$sql_sua_sanpham);
?>

<h2 style="margin-left: 350px;">Sửa sản phẩm</h2>

<body>

<table style="width:70%; height: 120px; border-collapse: collapse;">
	<form method="POST" action="modules/quanlysanpham/xuly.php?masanpham=<?php echo $_GET['masanpham']?>" enctype="multipart/form-data">
		<?php
			while($dong = mysqli_fetch_array($query_sua_sanpham)){
		?>

		  <tr>
		    <th>Mã sản phẩm</th>
		    <td><input type="text" name="masanpham" style="width:98%" value="<?php echo $dong['ma_sp'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Tên sản phẩm</th>
		    <td><input type="text" name="tensanpham" style="width:98%" value="<?php echo $dong['tendanhmuc'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Giá</th>
		    <td><input type="text" name="gia" style="width:98%" value="<?php echo $dong['giasp'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Số lượng</th>
		    <td><input type="text" name="soluong" style="width:98%" value="<?php echo $dong['soluong'] ?>"></td>
		  </tr>
		  <tr>
		    <th>Nội dung</th>
		    <td><textarea name="noidung" rows="4" style="width:98%"><?php echo $dong['noidung'] ?></textarea></td>
		  </tr>
		  <tr>
		    <th>Thứ tự</th>
		    <td><input type="text" name="thutu" style="width:98%" value="<?php echo $dong['thutu'] ?>"d></td>
		  </tr>
		  <tr>
		    <th>Ảnh</th>
		    <td>
		    	<input type="file" name="hinhanh">
		    	<img src="modules/quanlysanpham/uploads/<?php echo $dong['hinhanh'] ?>" width="150px">
		    </td>
		  </tr>
		  <tr>
		  	<th>Danh mục sản phẩm</th>
		  	<td>
		  		<select name="danhmucsp">
		  				<?php
		  				$sql_danhmuc= "SELECT * FROM quanlydanhmuc ORDER BY id_danhmuc DESC";
		  				$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
		  				while($row_danhmuc= mysqli_fetch_array($query_danhmuc)){
		  					if($row_danhmuc['id_danhmuc']==$dong['id_danhmuc']){
		  				?>
		  				<option selected value="<?php echo $row_danhmuc['id_danhmuc']?>" ><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
		  				<?php
		  					}else{
		  				?>
		  				<option value="<?php echo $row_danhmuc['id_danhmuc']?>" ><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
		  				<?php
		  					}
		  				}
		  				?>
		  		</select>
		  	</td>
		  </tr>
		  <tr>
		    <th>Tình trạng</th>
		  	<td>
		  		<select name="tinhtrang" value="<?php echo $dong['tinhtrang'] ?>">
		  			<option value="1">Hiện</option>
		  			<option value="2">Ẩn</option>
		  		</select>
		  	</td>
		  </tr>
		  <tr>
		    <td colspan="2"><input type="submit" value="Cập nhật sản phẩm" name="suasanpham" style="margin-left: 35%; margin-top: 10px; margin-bottom: 10px; font-size: 20px;"></td>
		  </tr>

		<?php
		}	
		?>
	</form>
</table>