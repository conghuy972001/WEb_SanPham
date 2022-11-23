<?php
include('../../config/connect.php');
$tenloaisanpham = $_POST['tensanpham'];
$masanpham = $_POST['masanpham'];
$giasanpham = $_POST['gia'];
$soluong = $_POST['soluong'];
$noidung = $_POST['noidung'];
$thutusanpham = $_POST['thutu'];
$tinhtrang = $_POST['tinhtrang'];
//hình ảnh
$hinhanh = $_FILES['hinhanh']['name'];
$hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
$hinhanh = time().'_'.$hinhanh;
$danhmucsp = $_POST['danhmucsp'];




if(isset($_POST['themsanpham'])){
	//them
	$sql_them = "INSERT INTO danhmuc(tendanhmuc, ma_sp, giasp, soluong, noidung, thutu, hinhanh, tinhtrang, id_danhmuc) VALUE ('".$tenloaisanpham."','".$masanpham."', '".$giasanpham."', '".$soluong."', '".$noidung."', '".$thutusanpham."', '".$hinhanh."', '".$tinhtrang."','".$danhmucsp."')";
	mysqli_query($mysqli,$sql_them);
	move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
	header('Location:../../index.php?action=quanlysanpham&query=them');
}elseif(isset($_POST['suasanpham'])){
	$id_sp = $_GET['masanpham'];
	//sua
	if($hinhanh!=''){
		move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);

		$sql_update = "UPDATE danhmuc SET tendanhmuc='".$tenloaisanpham."',thutu='".$thutusanpham."',ma_sp='".$masanpham."' ,giasp='".$giasanpham."' ,soluong='".$soluong."' ,noidung='".$noidung."' ,tinhtrang='".$tinhtrang."' ,hinhanh='".$hinhanh."',id_danhmuc='".$danhmucsp."' WHERE ma_sp = '$id_sp'";

		$sql = "SELECT * FROM danhmuc WHERE ma_sp = '$id_sp' LIMIT 1";
		$query = mysqli_query($mysqli,$sql);
		while($row = mysqli_fetch_array($query)){
			unlink('uploads/'.$row['hinhanh']);
		}

	}else{
		$sql_update = "UPDATE danhmuc SET tendanhmuc='".$tenloaisanpham."',thutu='".$thutusanpham."',ma_sp='".$masanpham."' ,giasp='".$giasanpham."' ,soluong='".$soluong."' ,noidung='".$noidung."' ,tinhtrang='".$tinhtrang."' ,id_danhmuc='".$danhmucsp."' WHERE ma_sp = '$id_sp'";
	}
	mysqli_query($mysqli,$sql_update);
	header('Location:../../index.php?action=quanlysanpham&query=them');

}else{
	//xoa anh
	$id_sp = $_GET['masanpham'];
	$sql = "SELECT * FROM danhmuc WHERE ma_sp = '$id_sp' LIMIT 1";
	$query = mysqli_query($mysqli,$sql);
	while($row = mysqli_fetch_array($query)){
		unlink('uploads/'.$row['hinhanh']);
	}

	//xoa
	$sql_xoa = "DELETE FROM danhmuc WHERE ma_sp = '".$id_sp."'";
	mysqli_query($mysqli,$sql_xoa);
	header('Location:../../index.php?action=quanlysanpham&query=them');

}

?>