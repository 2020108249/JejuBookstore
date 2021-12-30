<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>제주서점</title>
<link rel="stylesheet" href="design.css" type="text/css">
</head>
<?php
  $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');

  $bno = $_GET['id']; # bno에 id값을 받아와 넣음
  $sql = "SELECT * from hbooksub where book_id='".$bno."'";
  $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
  $booksub = mysqli_fetch_array($result);
?>
<body>
  <a href="hnu_login.html" style="float:right">Login</a>
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
  <!--비밀번호 확인-->
  <div class="back">
      <div class="container">
        <form method="post">
          <input type="password" name="pw_chk" placeholder="password"/> <input type="submit" value="확인" style="background-color:limegreen; width: 60px; outline:0;" />
        </form>
      </div>
  </div>
	<?php
	 	$bpw = $booksub['book_pw'];

	 	if(isset($_POST['pw_chk'])) {  #pw_chk가 입력됬다면
	 		$pwk = $_POST['pw_chk'];  #pwk에 저장
			if($pwk == $bpw) { #입력값과 DB값 비교
      ?>
      <script type="text/javascript">location.replace("bookread.php?book_id=<?php echo $booksub['book_id']; ?>");</script>
      <?php
			} else{
        echo "<script>alert('비밀번호를 다시 입력해주세요.');
        history.back();</script>";
      }
    }
    ?>
</body>
</html>
