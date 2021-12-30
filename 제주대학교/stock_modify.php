<?php
   $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
   $bno = $_GET['stock_id'];
   $sql = "SELECT * from stock where stock_id='$bno';";
   $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
   $stock = mysqli_fetch_array($result);
 ?>
<!doctype html>
<head>
   <meta charset="UTF-8">
   <title>제주서점</title>
   <link rel="stylesheet" href="design.css" type="text/css">
</head>
<body>
   <p style="float:right">관리자(제주대학교) 님</p>
   <br><br>
   <div id="logo">
      <h1 id="main_logo"><a href="home.html">제주서점(JNU)</a></h1>
   </div>
   <!--상단 메뉴-->
   <div>
      <ul class="hmenu">
         <li class="h"><a href="서점소개.html">서점소개</a></li>
         <li class="h"><a href="도서신청.php">도서신청</a></li>
         <li class="h"><a href="게시판.php">게시판</a></li>
         <li class="h"><a href="마일리지.php">마일리지</a></li>
      </ul>
   </div>
   <!--재고 수정 주요 화면 시작-->
      <div class="container2" style="font-size:30px;">
        <h4 style="background-color:white">재고 수정</h4>
            <div id="write_area">
              <!--modify_ok.php에 stock_id를 post 방식으로 넘김-->
                <form action="modify_ok.php?stock_id=<?php echo $bno; ?>" method="post">
                    <div id="in_title">
                        <input name="modify" id="utitle" rows="1" cols="55" maxlength="100" required />
                        <button type="submit">적용</button>
                    </div>
                </form>
            </div>
          </div>
    </body>
</html>
