<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
	unset($_SESSION['dangnhap']);
	header('location:login.php');
}
?>
<p><li style="list-style: none"><a href="index.php?action=dangxuat&query=dangxuat">Đăng xuất : <?php if(isset($_SESSION['dangnhap'])){
		echo $_SESSION['dangnhap'];
	}?></a></li></p>  