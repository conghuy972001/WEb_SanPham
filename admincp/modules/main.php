<div class="clear">
	
</div>
<h3>Main chính đây</h3>
<div class="main_change">
	<?php
		if(isset($_GET['action']) && $_GET['query']){
			$tam =$_GET['action'];
			$query =$_GET['query'];
		}
		else {
			$tam = '';
			$query = '';
		}
		if ($tam=='quanlysanpham' && $query=='them'){
			include("modules/quanlysanpham/them.php");
			include("modules/quanlysanpham/lietke.php");
		}
		elseif ($tam=='quanlysanpham' && $query=='suasp'){
			include("modules/quanlysanpham/them.php");
			include("modules/quanlysanpham/lietke.php");
			include("modules/quanlysanpham/sua.php");
		}elseif ($tam=='quanlydanhmuc' && $query=='them'){
			include("modules/quanlydanhmuc/them.php");
			include("modules/quanlydanhmuc/lietke.php");
		}
		elseif ($tam=='quanlydanhmuc' && $query=='suadm'){
			include("modules/quanlydanhmuc/them.php");
			include("modules/quanlydanhmuc/lietke.php");
			include("modules/quanlydanhmuc/sua.php");
		}
		elseif ($tam=='quanlytintuc' && $query=='them'){
			include("modules/quanlytintuc/them.php");
			include("modules/quanlytintuc/lietke.php");
		}
		elseif ($tam=='quanlytintuc' && $query=='suatt'){
			include("modules/quanlytintuc/them.php");
			include("modules/quanlytintuc/lietke.php");
			include("modules/quanlytintuc/sua.php");
		}
		elseif ($tam=='dangxuat' && $query=='dangxuat'){
			header("Location:login.php");
		}
		else{
			include("modules/bangdieukhien.php");
		}
	?>

</div>