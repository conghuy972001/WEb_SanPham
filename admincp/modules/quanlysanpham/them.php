<h2 style="margin-left: 350px;">Thêm sản phẩm</h2>

<body>

<table style="width:70%; height: 120px; border-collapse: collapse;">
	<form method="POST" action="modules/quanlysanpham/xuly.php" enctype="multipart/form-data">
		  <tr>
		    <th>Điền tên sản phẩm</th>
		    <td><input type="text" name="tensanpham" style="width:98%"></td>
		  </tr>
		  <tr>
		    <th>Mã Sản Phẩm</th>
		    <td><input type="text" name="masanpham" style="width:98%"></td>
		  </tr>
		  <tr>
		    <th>Giá </th>
		    <td><input type="text" name="gia" style="width:98%"></td>
		  </tr>
		  <tr>
		    <th>Số lượng</th>
		    <td><input type="text" name="soluong" style="width:98%"></td>
		  </tr>
		  <tr>
		    <th>Nội dung</th>
		    <td><textarea name="noidung" rows="4" style="width:98%"></textarea></td>
		  </tr>
		  <tr>
		    <th>Thứ tự</th>
		    <td><input type="text" name="thutu" style="width:98%"></td>
		  </tr>
		  <tr>
		    <th>Thêm ảnh</th>
		    <td><input type="file" name="hinhanh" style="width:98%"></td>
		  </tr>
		  <tr>
		  	<th>Danh mục sản phẩm</th>
		  	<td>
		  		<select name="danhmucsp">
		  				<?php
		  				$sql_danhmuc= "SELECT * FROM quanlydanhmuc ORDER BY id_danhmuc ASC";
		  				$query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
		  				while($row_danhmuc= mysqli_fetch_array($query_danhmuc)){
		  				?>
		  				<option value="<?php echo $row_danhmuc['id_danhmuc']?>" ><?php echo $row_danhmuc['ten_danhmuc'] ?></option>
		  				<?php
		  				}
		  				?>
		  		</select>
		  	</td>
		  </tr>
		  <tr>
		  	<th>Tình trạng</th>
		  	<td>
		  		<select name="tinhtrang">
		  			<option value="1">Hiện</option>
		  			<option value="2">Ẩn</option>
		  		</select>
		  	</td>
		  </tr>
		  <tr>
		    <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="themsanpham" style="margin-left: 35%; margin-top: 10px; margin-bottom: 10px; font-size: 20px;"></td>
		  </tr>
	</form>
</table>