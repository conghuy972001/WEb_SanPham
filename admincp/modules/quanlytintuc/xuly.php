<?php
include('../../config/connect.php');
$tentieude = $_POST['tentieude'];
$idtintuc = $_POST['idtintuc'];
$noidung = $_POST['noidung'];
//hinh anh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;




if(isset($_POST['themtintuc'])){
	//them
	$sql_them = "INSERT INTO quanlytintuc(id_tintuc, tieude, noidung, hinhanh) VALUE ('".$idtintuc."','".$tentieude."', '".$noidung."', '".$hinhanh."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlytintuc&query=them');
}elseif(isset($_POST['suatintuc'])){
	$id_tt = $_GET['idtintuc'];
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

		$sql_update = "UPDATE quanlytintuc SET id_tintuc='".$idtintuc."',tieude='".$tieude."',noidung='".$noidung."' ,hinhanh='".$hinhanh."' WHERE id_tintuc = '$id_tt'";

		$sql = "SELECT * FROM quanlytintuc WHERE id_tintuc = '$id_tt' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE quanlytintuc SET tid_tintuc='".$idtintuc."',tieude='".$tieude."',noidung='".$noidung."' WHERE id_tintuc = '$id_tt'";
	}
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlytintuc&query=them');

}else{
	//xoa anh
	$id_tt = $_GET['idtintuc'];
	$sql = "SELECT * FROM quanlytintuc WHERE id_tintuc = '$id_tt' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}

	//xoa
	$sql_xoa = "DELETE FROM quanlytintuc WHERE id_tintuc = '".$id_tt."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlytintuc&query=them');

}

?>