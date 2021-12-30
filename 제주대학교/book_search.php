<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>제주서점</title>
  <link rel="stylesheet" href="design.css" type="text/css">
</head>
<body>
  <div>
    <a href="login.html" style="float:right">Login</a>
    <br><br>
    <div id="logo">
        <h1 id="main_logo"><a href="home.html">제주서점(JNU)</a></h1>
    </div>
    <div>
    <ul class="hmenu">
        <li class="h"><a href="서점소개.html">서점소개</a></li>
        <li class="h"><a href="도서신청.php">도서신청</a></li>
        <li class="h"><a href="게시판.php">게시판</a></li>
        <li class="h"><a href="마일리지.php">마일리지</a></li>
    </ul>
</div>
<aside style="float:left; width : 15% ;height:3500px;">
<ul class = "vmenu">
        <details>
            <summary><b><a href="home_jejunu.php">전공도서</a></b></summary>
            <li>공과대학</li>
            <li>인문대학</li>
            <li>사회과학대학</li>
            <li>경상대학</li>
            <li>사범대학</li>
            <li>생명자원과학대학</li>
            <li>해양과학대학</li>
            <li>자연과학대학</li>
            <li>의과대학</li>
            <li>교육대학</li>
            <li>수의과대학</li>
            <li>간호대학</li>
            <li>약학대학</li>
        </details>
        <br>
        <details>
            <summary>교양도서</summary>
            <li>기초교양</li>
            <li>핵심교양</li>
        </details>
        <br>
        <details>
            <summary>자격증</summary>
            <li>TOEIC</li>
            <li>컴퓨터활용능력</li>
            <li>한국사능력검정</li>
        </details>
        <br>
        <details>
            <summary>기타</summary>
        </details>
    </ul>
</aside>
<!-- 존재하는 도서 검색결과 -->
  <?php
    $search_con = $_GET['search'];
  ?>
  <h1 style="margin-left:30px;"> '<?php echo $search_con; ?>' 검색결과</h1>
  <hr>

    <table class="write">
      <?php
        $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
        $sql2 = "SELECT * FROM stock WHERE book_title LIKE '%$search_con%' ORDER BY stock_id DESC";
        $result = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        while($stock = mysqli_fetch_array($result)){
          $title=$stock['book_title'];
          if(strlen($title)>30){  #title이 30을 넘어서면 ...표시
              $title=str_replace($stock['book_title'],mb_substr($stock['book_title'],0,30,"utf-8")."...",$stock['book_title']);
          }
      ?>
        <tbody><!--제목, 저자, 출판사, 가격, 재고 출력-->
          <tr>
            <td width="500"><span><?php echo $title;?></span></a></td>
            <td width="120"><?php echo $stock['book_writer']?></td>
            <td width="120"><?php echo $stock['book_publisher']?></td>
            <td width="120"><?php echo $stock['book_price']?>원</td>
            <td width="100">재고: <?php echo $stock['book_stock']?>개</td>
          </tr>
        </tbody>
        <?php } ?>
      </table>
      <hr>
      <div>
        <!-- 처음화면으로 이동-->
      <h3 style="float: right;margin: 30px 200px 0 0;"><a href="home_jejunu.php">[목록으로]</a></h3>
    </div>
  </div>
</body>
</html>
