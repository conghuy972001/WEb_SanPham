<div class="background">

		<div class="adv">
			<a href="http://localhost/bai_cuoi_ki/index.php?quanly=tintuc">
				<img src="img/slide_1.jpg" width="430px" height="90px">
				<img src="img/slide_2.jpg" height="90px" width="430px">
				<img src="img/slide_3.jpg" height="90px" width="430px">
			</a>


		</div>

		

		<div class="main">
					<?php
					include("sidebar/sidebar.php");
					?>
				<div class="maincontent">
					<?php
					if(isset($_GET['quanly'])){
						$tam =$_GET['quanly'];
					}
					else {
						$tam = '';
					}
					if ($tam=='phukiendienthoai') {
						include("maincontent/pkdienthoai.php");
					}
					elseif ($tam=='phukienlaptop') {
						include("maincontent/pklaptop.php");
					}
					elseif ($tam=='tintuc') {
						include("maincontent/tintuc.php");
					}
					elseif ($tam=='danhmucsanpham'){
						include("maincontent/main.php");
					}
					elseif ($tam=='sanpham'){
						include("maincontent/sp.php");
					}
					elseif ($tam=='dangnhap'){
						include("maincontent/dangnhap.php");
					}
					elseif ($tam=='dangky'){
						include("maincontent/dangky.php");
					}
					elseif ($tam=='doimatkhau') {
						include("maincontent/doimatkhau.php");
					}
					elseif ($tam=='timkiem'){
						include("maincontent/timkiem.php");
					}
					else{
						include("maincontent/trangchu.php");
					}
					?>
	
			<div class="clear"></div>
		</div>
		<div class="thua"></div>
		<div class="thua1"></div>
		
	</div>