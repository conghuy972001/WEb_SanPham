<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_main= "SELECT * FROM danhmuc WHERE tendanhmuc LIKE '%".$tukhoa."%' LIMIT 10";
	$query_main = mysqli_query($mysqli,$sql_main);

?>
<h3>Phụ kiện mới nhất: <?php echo $_POST['tukhoa']?></h3>
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