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
    <!-- 게시판에 작성할 내용 입력받기, 신청하기 클릭시 내용 확인 화면으로 이동-->
    <div>
      <form enctype="multipart/form-data" action="bookwriteOK.php" method="post">
      <table style="margin:70px 0 30px 450px;">
          <tr>
              <th>이름</th>
              <th><textarea name="name" id="uname" rows="2" cols="60" placeholder="이름을 입력하세요" maxlength="100" required></textarea>
              </th>
          </tr>
          <tr>
              <th>제목</th>
              <th><textarea name="title" id="utitle" rows="2" cols="60" placeholder="제목을 입력하세요" maxlength="100" required></textarea>
              </th>
          </tr>
          <tr>
              <th>내용</th>
              <th><textarea name="content" id="ucontent" rows="5" cols="60" placeholder="책제목 / 출판사 / 저자를 입력하세요" maxlength="100" required></textarea>
              </th>
          </tr>
          <tr>
              <th>비밀번호</th>
              <th style="float:left;"><input type="password" name="pw" id="upw"  placeholder="비밀번호" maxlength="100">
              </th>
          </tr>
          <tr>
            <th></th>
            <th style="float:left;"><input style="height:45px;"type="file" name="SelectFile"></th>
          </tr>
          <tr>
            <th></th>
            <th style="float:right;"><button type="submit" class="bu">신청하기</button></th>
          </tr>
      </table>

      </div>
          </form>
    </body>
</html>
