<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>제주서점</title>
    <link rel="stylesheet" href="design.css" type="text/css">
</head>
<body>
    <a href="login.html" style="float:right">Login</a>
    <br><br>
    <div id="logo">
      <h1 id="main_logo"><a href="../제주대학교/home.html">제주서점(INU)</a></h1>
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
        <aside style="float:left; width:15%; height:500px;">
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
  <?$board_id=$_GET['board_id'];?>
  <!--게시판 글쓰기 주요 화면 시작-->
    <div id="board_write">
        <div>
            <form enctype="multipart/form-data" action="write_ok.php?post=<?echo $post_id;?>" method="post">
                <table style="margin:70px 0 30px 450px;" class="post">
                    <tr>
                        <th>이름</th>
                        <th><textarea name="name" id="utitle" rows="2" cols="60" placeholder="name" maxlength="100" required></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>제목
                        </th>
                        <th><textarea name="title" id="utitle" rows="2" cols="60" placeholder="title" maxlength="100" required></textarea>
                        </th>
                    </tr>
                    <tr>
                        <th>내용
                        </th>
                        <th><textarea name="content" id="utitle" rows="5" cols="60" placeholder="content" maxlength="100" required></textarea>
                        </th>
                    </tr>
                    <th></th>
                    <!--업로드할 파일 선택-->
                    <th style="float:left;"><input style="height:45px;"type="file" name="SelectFile"></th>
                  </tr>
                  <tr>
                    <th></th>
                    <th style="float:right;"><button type="submit" class="bu">작성완료</button></th>
                  </tr>
                </table>
            </form>
        </div>
    </div>
    </body>
</html>
