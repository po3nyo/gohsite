<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Good One Hunting!</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css" />
    <style>
    * {
        background-color: white;

    }

    body {}

    header {
        width: 100%;
        height: 100px;
    }

    nav {
        width: 100%;
        height: 23px;
        border-top: 1px solid red;
        border-bottom: 1px solid red;
        margin-right: 10%;
        background-color: black;
        color: white;
    }

    nav a {
        background-color: black;
        color: white;
        text-decoration: none;
    }

    #left {
        position: fixed;
        left: 30px;
        top: 200px;
        bottom: 0;
        width: 200px;
    }

    #left ul {
        background-color: black;
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #left ul li {
        margin-left: 20px;
        padding-top: 5px;
        background-color: black;
    }

    #left ul li a {
        background-color: black;
        color: white;
        text-decoration: none;
    }

    #main {
        padding-left: 250px;
        padding-top: 20px;
        left: 250px;
        top: 200px;
        bottom: 0;
        width: 60%;
        height: 500px;
    }

    footer {
        background-image: url('images/footer_bg.gif');
        width: 100%;
        position: fixed;
        left: 0;
        top: 700px;
        bottom: 0;
        height: 50px;
        clear: both;
        text-align: center;
    }

    .f {
        text-align: center;
    }
    </style>
</head>

<body>
    <header align=center>
        <h1>
            <a href="index.php">Good One Hunting</a>
        </h1>
    </header>
    <?php
    if(isset($_SESSION['userid'])){ 
        echo "<nav align=right>
        안녕하세요 " .$_SESSION['userid']."님&nbsp&nbsp <a href='./member/logout.php'>로그아웃</a>
        <a target='iframe1' href='./member/my_page.php'>마이페이지</a>
        </nav>";
        }
        else{
        ?>
    <nav align=right>
        <a href="./member/login.php">로그인</a>
        <a href="./member/sign_up.php">회원가입</a>
    </nav>
    <?php
    }
    ?>
    <aside id="left">
        <h4>카테고리</h4>
        <ul>
            <li><a target="iframe1" href="./board/board.php?board_id=notice">공지사항</a></li>
            <li><a target="iframe1" href="./board/board.php?board_id=board">자유게시판</a></li>

            <li><a target="iframe1" href="./board/board.php?board_id=matching">구인구직</a></li>
            <li><a target="iframe1" href="./board/board.php?board_id=portfolio">포트폴리오</a></li>
        </ul>
    </aside>
    <section id="main">
        <article id="article1">
            <iframe name="iframe1" src="./page/main.php" width="1000px" height="700px" seamless></iframe>
        </article>
    </section>
    <footer>Copyright (c) Good One Hunting</footer>
</body>

</html>