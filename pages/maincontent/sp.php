<?php
	$sql_namesp= "SELECT * FROM danhmuc WHERE ma_sp='$_GET[id]' LIMIT 1";
	$query_namesp = mysqli_query($mysqli,$sql_namesp);
	$row_title =mysqli_fetch_array($query_namesp);
?>
<h3>Chi tiết sản phẩm: <?php echo $row_title['tendanhmuc']?></h3>
<?php
	$sql_chitiet = "SELECT * FROM danhmuc,quanlydanhmuc WHERE danhmuc.id_danhmuc=quanlydanhmuc.id_danhmuc AND danhmuc.ma_sp='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="hinhanhsp">
	<img style="width: 30%; float: left; margin: 20px 20px" src="admincp/modules/quanlysanpham/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
</div>
<form method="POST" action="pages/maincontent/themgiohang.php?idsanpham=<?php echo $row_chitiet['ma_sp'] ?>">
	<div class="chitietsp" style="margin-top: 20px; margin-left: 400px;">
		<h3>Tên sản phẩm: <?php echo $row_chitiet['tendanhmuc'] ?></h3>
		<p>Mã Sản phẩm: <?php echo $row_chitiet['ma_sp'] ?></p>
		<p>Giá Sản phẩm: <?php echo number_format($row_chitiet['giasp']) ?> VNĐ</p>
		<p>Số lượng Sản phẩm: <?php echo $row_chitiet['soluong'] ?></p>
		<p>Danh mục Sản phẩm: <?php echo $row_chitiet['ten_danhmuc'] ?></p>
		<input class="themgiohang" type="submit" value="Thêm vào giỏ hàng " style="background: blue; color: white; padding: 12px; margin-top: 20px;">
	</div>
	
</form>
<?php
}
?>