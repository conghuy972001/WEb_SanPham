<?php
  $mysqli = new mysqli("127.0.0.1","root","","web_mysql");

  // Check connection
  if ($mysqli->connect_errno) {
    echo "Kết nối MYSQL không thành công" . $mysqli->connect_error;
    exit();
  }
?>