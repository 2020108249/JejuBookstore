<?php
$conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
?>
<!doctype html>
<head>
<meta charset="UTF-8">
<title>제주서점</title>
<meta name="description" content="제주 내 대학생을 위한 서점 웹사이트">
<link rel="stylesheet" type="text/css" href="design.css" />
</head>
<body>
    <a href="hun_login.html" style="float:right">Login</a>
    <br><br>
    <div id="logo">
        <h1 id="main_logo"><a href="../제주대학교/home.html">제주서점(HNU)</a></h1>
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
  $bno = $_GET["book_id"];  //id 받아와서 bno에 저장
  $sql = "SELECT * FROM hbooksub WHERE book_id='".$bno."'";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $booksub = mysqli_fetch_array($result);
?>
<!--내용 출력-->
<div>
<h2><?php echo $booksub["book_title"];?></h2>
  <div>
    <?php echo $booksub["book_name"]; ?> | <?php echo $booksub["book_date"]; ?>
    </div>
    <hr>
    <div style="height:300px;">
      <?php echo nl2br($booksub["book_content"]); ?>
    </div>
    <hr>
    <div>
      파일: <a href="upload/<?php echo $booksub['book_file'];?>" download><?php echo $booksub['book_file'];?></a>
    </div>
    <hr>
<div>
  <h3 style="float: right;margin: 0 200px 0 0;"><a href="도서신청.php">[목록으로]</a></h3>
</div>
</div>
</body>
</html>
