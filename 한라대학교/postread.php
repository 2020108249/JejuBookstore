<!doctype html>
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
              <summary><b><a href="home_hnu.php">전공도서</a></b></summary>
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
  <?php
     $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
     $bno = $_GET['id'];
     $sql = "SELECT * FROM hpost WHERE post_id='".$bno."'";
   $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
   $post = mysqli_fetch_array($result);
  ?>
<!--게시판 글 읽기 주요 화면 시작-->
<div>
  <h2><?php echo $post['post_title'];?></h2>
     <div>
        <?php echo $post['post_name']; ?> | <?php echo $post['post_date']; ?>
        </div>
     <hr>
     <div style="height:300px;">
             <?php echo nl2br("$post[post_content]"); ?>
        </div>
     <hr>
     <div>
       파일: <a href="upload/<?php echo $post['post_file'];?>" download><?php echo $post['post_file'];?></a>
     </div>
     <hr>
  <div>
    <h3 style="float: right;margin: 0 200px 0 0;"><a href="게시판.php">[목록으로]</a></h3>
  </div>
</div>
</body>
</html>
