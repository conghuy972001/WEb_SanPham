<?php
$sql_tt= "SELECT * FROM quanlytintuc LIMIT 5";
$query_tt = mysqli_query($mysqli,$sql_tt);

?>
<div class="news">
			<h3>Tin tức mới nhất trong ngày</h3>
			<div class="list_new">
				<li>
					<?php
					while($row_main= mysqli_fetch_array($query_tt)){
					?>
					<li>
						<a href="index.php?quanly=tintuc&id=<?php echo $row_main['id_tintuc']?>">
							<img src="admincp/modules/quanlytintuc/uploads/<?php echo $row_main['hinhanh']?>">
							<p class="title_product"><?php echo $row_main['tieude']?></p>
							<p class="price_product">Nội dung: <?php echo ($row_main['noidung'])?></p>
						</a>
					</li>
					<?php
					}
					?>
				</li>
			</div>
		</div>