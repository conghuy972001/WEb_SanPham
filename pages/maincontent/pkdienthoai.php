<?php
$sql_pkdt= "SELECT * FROM danhmuc WHERE id_danhmuc= 'OL1' OR id_danhmuc='TN1' OR id_danhmuc='KCL1' LIMIT 10";
$query_pkdt = mysqli_query($mysqli,$sql_pkdt);

?>
<h3>Phụ kiện điện thoại</h3>
					<ul class="product_list">
						<?php
						while($row_main= mysqli_fetch_array($query_pkdt)){
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