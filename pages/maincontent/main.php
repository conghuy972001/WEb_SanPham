<?php
	$sql_main= "SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc='$_GET[id]' ORDER BY id_danhmuc DESC LIMIT 10";
	$query_main = mysqli_query($mysqli,$sql_main);

	$sql_namedm= "SELECT * FROM quanlydanhmuc WHERE id_danhmuc='$_GET[id]' LIMIT 1";
	$query_namedm = mysqli_query($mysqli,$sql_namedm);
	$row_title =mysqli_fetch_array($query_namedm);
?>
<h3>Phụ kiện mới nhất: <?php echo $row_title['ten_danhmuc']?></h3>
					<ul class="product_list">
						<?php
						while($row_main= mysqli_fetch_array($query_main)){
						?>
						<li>
							<a href="index.php?quanly=sanpham&id=<?php echo $row_main['ma_sp']?>">
								<img src="admincp/modules/quanlysanpham/uploads/<?php echo $row_main['hinhanh']?>">
								<p class="title_product"><?php echo $row_main['tendanhmuc']?></p>
								<p class="price_product">Giá: <?php echo number_format($row_main['giasp'])?> VNĐ</p>
							</a>
						</li>
						<?php
						}
						?>
					</ul>
				</div>