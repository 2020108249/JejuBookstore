<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>제주서점</title>
  <meta name="description" content="제주 내 대학생을 위한 서점 웹사이트">
  <link rel="stylesheet" type="text/css" href="design.css">
</head>
<body>
  <a href="login.html" style="float:right">Login</a>
  <br><br>
  <div id="logo">
    <h1 id="main_logo"><a href="../제주대학교/home.html">제주서점(INU)</a></h1>
  </div>
  <div>
    <ul class="hmenu">
      <li class="h"><a href="서점소개.html">서점소개</a></li>
      <li class="h"><a href="도서신청.php"><b>도서신청</b></a></li>
      <li class="h"><a href="게시판.php">게시판</a></li>
      <li class="h"><a href="마일리지.php">마일리지</a></li>
    </ul>
  </div>
  <aside style="float:left; width : 15% ;height:500px;">
    <ul class = "vmenu">
      <details>
        <summary><a href="home_inu.php">전공도서</a></summary>
        <li>공학계열</li>
        <li>자연과학계열</li>
        <li>인문사회계열</li>
        <li>예체능계열</li>
        <li>학사학위과정(4년제)</li>
      </details>
      <br>
      <details>
        <summary>교양도서</summary>
        <li>공통교양</li>
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
  <br>
    <!--도서신청 시작-->
  <div>
    <h3>원하는 도서를 신청해주세요.</h3>
    <table class="write" style="padding-top:25px;"action="bookwriteOK.php">
      <tr>
        <th width="50px">No.</th>
        <th width="300px">제목</th>
        <th width="200px">작성자</th>
        <th width="300px">작성일자</th>
      </tr>
      <?php
      $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
      $sql = "SELECT * FROM ibooksub ORDER BY book_id DESC LIMIT 0,10";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        while($booksub = mysqli_fetch_array($result))
        {
          $title=$booksub["book_title"];
          $id=$booksub["book_id"];
          $name=$booksub["book_name"];
          if(strlen($title)>30)
          {
            $title=str_replace($booksub["book_title"],mb_substr($booksub["book_title"],0,20,"utf-8")."...",$booksub["book_title"]);
          }
      ?>
      <tbody>
        <tr>
          <td width="50px"><?php echo $id;?></td>
          <!--글쓰기 시 작성한 비밀번호 확인 php로 연결-->
          <td width="300px"><a href="book_pwcheck.php?id=<?php echo $booksub["book_id"];?>"><?php echo $title;?></a></td>
          <td width="200px"><?php echo $name;?></td>
          <td width="300px"><?php echo $booksub['book_date'];?></td>
        </tr>
      </tbody>
      <?php } ?>
    </table>
    <hr>
    <div id="글쓰기" style="float:left;">
      <!--글 작성하는 화면으로 이동-->
      <a href="bookwrite.php"><button class="bu">글쓰기</button></a>
    </div>
  </div>
</body>
</html>
