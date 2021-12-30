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
  <!--상단 메뉴-->
  <div>
    <ul class="hmenu">
      <li class="h"><a href="서점소개.html">서점소개</a></li>
      <li class="h"><a href="도서신청.php">도서신청</a></li>
      <li class="h"><a href="게시판.php"><b>게시판</b></a></li>
      <li class="h"><a href="마일리지.php">마일리지</a></li>
    </ul>
  </div>
  <!--왼쪽 메뉴-->
  <aside style="float:left; width : 15% ;height:500px;">

    <ul class = "vmenu">
      <details>
        <summary><a href="home_hnu.php">전공도서</a></summary>
        <li>간호학부</li>
        <li>보건학부</li>
        <li>국제관광호텔학부</li>
        <li>사회복지학부</li>
        <li>정보기술/건축학부</li>
        <li>생명자원학부</li>
        <li>예술학부</li>
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
  <br>
  <!--게시판 주요 화면 시작-->
    <div>
      <h3>도서추천/중고 책 거래 게시판입니다.</h3>
      <!-- 검색 -->
      <div id="search_box">
        <form action="search_result.php" method="get">
          <select name="catgo" style="font-size:20px;">
            <option value="post_title">제목</option>
            <option value="post_name">작성자</option>
          </select>
          <input type="text" name="search" size="40" required="required" style="padding-right:20px;"/>
          <button class="bu">검색</button>
        </form>
      </div>
      <!-- 글쓰기 작성 내용 표시 -->
      <div style="padding-top:30px;">
        <table class="write">
        <thead>
          <tr>
            <th style="width:30px">No.</th>
            <th style="width:300px">제목</th>
            <th style="width:200px">작성자</th>
            <th style="width:300px">작성일자</th>
          </tr>
        </thead>

        <?php
          $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary'); #DB(jejulibary) 연결
          $sql = "SELECT * FROM hpost ORDER BY post_id DESC LIMIT 0,10";       #한 화면에 10개만 표시
          $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
          while($post = mysqli_fetch_array($result))
          {
            $title=$post['post_title'];
            #title이 30을 넘어서면 ...표시,
            if(strlen($title)>30){
             $title=str_replace($post['post_title'], mb_substr($post['post_title'],0,20,"utf-8")."...", $post['post_title']);
            }
          ?>
        <tbody>
          <tr>  <!--내용 출력-->
            <td width="50px"><?php echo $post[4];?></td>
            <td width="50px"><a href="postread.php?id=<?php echo $post['post_id'];?>"><?php echo $post[0];?></a></td>
            <td width="50px"><?php echo $post[1];?></td>
            <td width="50px"><?php echo $post[3];?></td>
          </tr>
        </tbody>
        <?php }?>
      </table>
      <hr>
      <div id="글쓰기"style="padding-right:50px;float:left;">
        <a href="postwrite.php"><button class="bu">글쓰기</button></a>
      </div>
    </div>
  </div>
</body>
</html>
