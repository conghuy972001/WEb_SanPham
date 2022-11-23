<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/styleadmin.css"/>
</head>
<?php
session_start();
if(!isset($_SESSION['dangnhap'])){
	header('location:login.php');
}
?>
<body>
	<h3 class="title_admin">Xin chào Admin</h3>

	<div class="rim" style=" width: 85%; margin: 0 auto;">
		<?php
			include("config/connect.php");
			include("modules/header.php");
			include("modules/menu.php");
			include("modules/main.php");
			include("modules/footer.php");
		?>
	</div>
</body>
</html>