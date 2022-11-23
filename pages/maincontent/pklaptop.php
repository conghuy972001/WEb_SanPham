<?php
$sql_pklt= "SELECT * FROM danhmuc WHERE id_danhmuc= 'BP1' OR id_danhmuc='CLT1' LIMIT 10";
$query_pklt = mysqli_query($mysqli,$sql_pklt);

?>
<h3>Phụ kiện Laptop</h3>
					<ul class="product_list">
						<?php
						while($row_main= mysqli_fetch_array($query_pklt)){
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