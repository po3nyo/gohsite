<?php
  session_start();
  $connect = mysqli_connect("localhost","root","");
  mysqli_set_charset($connect,"utf8");
  mysqli_select_db($connect,"gohsite");
  

  $id = $_POST['userid'];
  $pw = $_POST['userpw'];

  if (!$id) {
    echo "
    <script>
      window.alert('아이디를 입력하세요');
      history.go(-1);
      </script>";
  }
  elseif (!$pw) {
    echo "
    <script>
      window.alert('패스워드를 입력하세요')
      history.go(-1)
      </script>";

  }
  else {


  $sql = "select * from user where id='$id'";
  $result = mysqli_query($connect,$sql);
  $num1 = mysqli_num_rows($result);

  $sql = "select * from user where id='$id' and pw='$pw'";
  $result = mysqli_query($connect,$sql);
  $num2 = mysqli_num_rows($result);
  if (!$num1) {
    echo"
    <script>
      window.alert('아이디/비밀번호가 틀렸습니다 다시 입력하세요')
      history.go(-1)
      </script>";
  }
  elseif (!$num2) {
    echo "
    <script>
      window.alert('아이디/비밀번호가 틀렸습니다 다시 입력하세요')
      history.go(-1)
      </script>";
  }
  else {
    session_start();
    $user = mysqli_fetch_array($result);
    $_SESSION['userid'] = $id;
    $_SESSION['user_nic'] = $user[2];
    echo "
    <script>
      document.location.href='index.php'
    </script>";
  }
}
mysqli_close($connect);
?>

<meta charset="utf-8">
