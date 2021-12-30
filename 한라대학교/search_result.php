<!doctype html>
<head>
  <meta charset="UTF-8">
  <title>제주서점</title>
  <link rel="stylesheet" href="design.css" type="text/css">
</head>
<body>
    <a href="login.html" style="float:right">Login</a>
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
  <div>
  <?php
    $catagory = $_GET['catgo']; /*카테고리(제목, 작성자) 중 하나*/
    $search_con = $_GET['search']; /*검색내용*/
  ?>
  <?php if($catagory=='post_title'){
      $catname = '제목';
  } else if($catagory=='post_name'){
      $catname = '작성자';
  } ?>
  <h1 style="margin-left:30px;"><?php echo $catname; ?> '<?php echo $search_con; ?>' 검색결과</h1>
  <hr>
  <!--검색 결과 테이블-->
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
        $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
        $sql2 = "SELECT * FROM hpost WHERE $catagory LIKE '%$search_con%' ORDER BY post_id DESC";/*$search_con(검색 내용)이 들어간 모든 튜플을 내림차순으로 select*/
        $result = mysqli_query($conn, $sql2) or die(mysqli_error($conn));
        while($post = mysqli_fetch_array($result)){
          $title=$post['post_title'];
            if(strlen($title)>30){/*제목 길이가 30을 넘어선 부분을 ...으로 나타냄*/
                $title=str_replace($post['post_title'],mb_substr($post['post_title'],0,30,"utf-8")."...",$post['post_title']);
            }
      ?>
      <!--검색 결과 테이블-->
        <tbody>
          <tr>
            <td width="70"><?php echo $post['post_id']; ?></td>
            <td width="500">
          <a href='pw_input.php?id=<?php echo $post["post_id"]; ?>'><span><?php echo $title;?></span><span class="re_ct"></span></a></td>
            <td width="120"><?php echo $post['post_name']?></td>
            <td width="100"><?php echo $post['post_date']?></td>

          </tr>
        </tbody>

        <?php } ?>
      </table>
      <hr>
      <div>
        <h3 style="float: right;margin: 30px 200px 0 0;"><a href="게시판.php">[목록으로]</a></h3>
    </div>
  </div>
</body>
</html>
