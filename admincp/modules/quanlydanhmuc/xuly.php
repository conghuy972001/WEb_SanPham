<?php
include('../../config/connect.php');
$iddanhmuc = $_POST['iddanhmuc'];
$tendanhmuc = $_POST['tendanhmuc'];
$thutudanhmuc = $_POST['thutudanhmuc'];




if(isset($_POST['themdanhmuc'])){
	//them
	$sql_them = "INSERT INTO quanlydanhmuc(id_danhmuc, ten_danhmuc, thutu_danhmuc) VALUE ('".$iddanhmuc."','".$tendanhmuc."','".$thutudanhmuc."')";
	mysqli_query($mysqli,$sql_them);
	header('Location:../../index.php?action=quanlydanhmuc&query=them');
}elseif(isset($_POST['suadanhmuc'])){
	$id_dm = $_GET['iddanhmuc'];
	//sua
	$sql_update = "UPDATE quanlydanhmuc SET id_danhmuc='".$iddanhmuc."', ten_danhmuc='".$tendanhmuc."', thutu_danhmuc='".$thutudanhmuc."' WHERE id_danhmuc = '$id_dm'";
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlydanhmuc&query=them');

}else{
	$id_dm = $_GET['iddanhmuc'];
	//xoa
	$sql_xoa = "DELETE FROM quanlydanhmuc WHERE id_danhmuc = '".$id_dm."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlydanhmuc&query=them');

}


?>