<?php
//session_start();
//include('../../admincp/config/connect.php');
if(isset($_POST['dangnhapkh'])){
      $taikhoan = $_POST['username'];
      $matkhau = md5($_POST['password']);
      $sql = "SELECT * FROM dangky WHERE email='". $taikhoan."' AND matkhau='". $matkhau."' LIMIT 1";
      $row = mysqli_query($mysqli,$sql);
      $count = mysqli_num_rows($row);
      if($count>0){
          $_SESSION['dangnhapkh'] = $taikhoan;
          header("Location:https://www.facebook.com/");
      }else{
?>
<p style="text-align: center;">Tài khoản hoặc mật khẩu sai....Vui lòng đăng nhập lại</p>
<?php
        //header("Location:login.php");
      } 
}
?>

<p>Đăng nhập thành viên</p>
<style type="text/css">
  table.dangky tr td {
    padding: 5px;
  }
</style>
<form action="" method="POST">
  <table border="1" class="table-dangnhapkh" style="text-align: center; border-collapse: collapse; width: 300px;">
    <tr>
      <td>Email</td>
      <td><input type="text" name="username" style="width: 230px;"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><input type="password" name="password" style="width: 230px"></td>
    </tr>
        <td colspan="2"><input type="submit" name="dangnhapkh" value="Đăng nhập"></td>
    </tr>
    <td colspan="2"><a href="index.php?quanly=dangky">Đăng ký tài khoản mới</a>  |  <a href="index.php?quanly=doimatkhau">Đổi mật khẩu</a></td>
  </table>
</form>