<?php
//include('../../admincp/config/connect.php');
  if(isset($_POST['dangky'])) {
      $tenkhachhang = $_POST['hovaten'];
      $email = $_POST['email'];
      $dienthoai = $_POST['dienthoai'];
      $matkhau = md5($_POST['matkhau']);
      $diachi = $_POST['diachi'];
      
      $sql_dangky = mysqli_query($mysqli,"INSERT INTO dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
      if($sql_dangky){
        echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
      }
  }
?>
<p>Đăng ký thành viên</p>
<style type="text/css">
  table.dangky tr td {
    padding: 5px;
  }
</style>
<form action="" method="POST">
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;">
  <tr>
      <td>Họ và tên</td>
      <td><input type="text" size="50" name="hovaten"></td> 
  </tr>
  <tr>
      <td>Email</td>
      <td><input type="text" size="50" name="email"></td> 
  </tr>
  <tr>
      <td>Điện thoại</td>
      <td><input type="text" size="50" name="dienthoai"></td> 
  </tr>
  <tr>
      <td>Địa chỉ</td>
      <td><input type="text" size="50" name="diachi"></td> 
  </tr>
  <tr>
      <td>Mật khẩu</td>
      <td><input type="text" size="50" name="matkhau"></td> 
  </tr>
  <tr>
      <td colspan="2"><input type="submit" name="dangky" value="Đăng ký" style="font-size: 24px; margin-left: 200px;"></td>
  </tr>
  <td colspan="2" style=" text-align: center;"><a href="index.php?quanly=dangnhap">Quay lại Đăng nhập</a>  |  <a href="index.php">Hủy Đăng ký</a></td>
</table>
</form>
