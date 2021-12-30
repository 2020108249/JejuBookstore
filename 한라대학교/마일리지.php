<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>제주서점</title>
  <link rel="stylesheet" href="design.css" type="text/css">
</head>
<body>
  <a href="hnu_login.html" style="float:right">Login</a>
  <br><br>
  <div id="logo">
    <h1 id="main_logo"><a href="../제주대학교/home.html">제주서점(HNU)</a></h1>
  </div>
  <div>
    <ul class="hmenu">
      <li class="h"><a href="서점소개.html">서점소개</a></li>
      <li class="h"><a href="도서신청.php">도서신청</a></li>
      <li class="h"><a href="게시판.php">게시판</a></li>
      <li class="h"><a href="마일리지.php"><b>마일리지</b></a></li>
    </ul>
  </div>
  <div class="back">
    <!--확인버튼 클릭시 팝업화면 뜨도록 연결-->
    <form method="post" action="마일리지확인.php">
      <div class="container">
        <input name="cname" id="" placeholder="name"><br>
        <input name="chp" password="" placeholder="phone_number"><br>
        <input type="submit" value="마일리지 확인"/>
      </div>
    </form>
  </div>
</body>
</html>
