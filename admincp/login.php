<?php
session_start();
include('config/connect.php');
if(isset($_POST['dangnhap'])){
      $taikhoan = $_POST['username'];
      $matkhau = md5($_POST['password']);
      $sql = "SELECT * FROM admin WHERE username='". $taikhoan."' AND password='". $matkhau."' LIMIT 1";
      $row = mysqli_query($mysqli,$sql);
      $count = mysqli_num_rows($row);
      if($count>0){
          $_SESSION['dangnhap'] = $taikhoan;
          header("Location:index.php");
      }else{
?>
<p style="text-align: center;">Tài khoản hoặc mật khẩu sai....Vui lòng đăng nhập lại</p>
<?php
        //header("Location:login.php");
      } 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Đăng nhập admincp</title>
  <style type="text/css">
    body{
      background:#f2f2f2;}
      .wrapper-login {
          width: 15%;
          margin: auto;
      }
      table.table-login {
          width: 100%;
      }
      table.table-login tr td {
    padding: 5px;
      }
  </style>
</head>
<body>
  <div class="wrapper-login">
    <form action="" method="POST">
  <table border="1" class="table-login" style="text-align: center; border-collapse: collapse;">
    <tr>
      <td colspan="2"><h3>Đăng nhập</h3>
    </tr>
    <tr>
      <td>Tài khoản</td>
      <td><input type="text" name="username"></td>
    </tr>
    <tr>
      <td>Mật khẩu</td>
      <td><input type="password" name="password"></td>
    </tr>
      <td colspan="2"><input type="submit" name="dangnhap" value="Đăng nhập"></td>
  </table>
</div>
</body>
</html>