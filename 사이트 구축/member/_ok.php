<?php

include "../db_connect.php";
include "../password.php";

$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
$username = $_POST['name'];
//$adress = $_POST['adress'];
//$sex = $_POST['sex'];

$sql = mq("update user set pw='".$userpw."','nic_name='".$username."',' where id='".$_SESSION['userid']."'");
echo "<script>alert('정보변경이 완료되었습니다 	'); history.back();</script>";

?>