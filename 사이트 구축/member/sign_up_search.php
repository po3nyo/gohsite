<?php
  include "../db_connect.php";
  include "../password.php";
  

  $id = $_POST['id'];
  $nic = $_POST['name'];
  $pw = password_hash($_POST['passw'], PASSWORD_DEFAULT);
  $date=date("Y-m-d");
  
  $sql = mq("insert into user (id, nic_name, pw, user_date) values ('".$id."','".$nic."','".$pw."','".$date."')");
  echo"<script>alert('회원가입이 완료되었습니다.'); location.href= '../index.php';</script>";
?>


