<!DOCTYPE html>
<html>
    <head>
        <title>제주서점</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css" type="text/css">
    </head>
    <body>
        <p style="float:right">관리자(제주대학교) 님</p>
        <br><br>
        <div id="logo">
            <h1><a href="home.html">제주서점(JNU)</a></h1>
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
                    <summary><b><a href="manageselect.php">전공도서</a></b></summary>
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
    <?php
      $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
      $sql = "SELECT * FROM stock";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      while($stock = mysqli_fetch_array($result)){
        #DB내용을 각각의 변수로 저장
        $id=$stock["stock_id"];
        $title=$stock["book_title"];
        $bookstock=$stock["book_stock"];
        $writer=$stock["book_writer"];
        $publisher=$stock["book_publisher"];
        $price=$stock["book_price"];

        #title에 따른 그림 저장
        if($title=="알기 쉬운 알고리즘"){
             $img="<img height='300px' src= 'http://image.yes24.com/goods/101875856/XL'/>";
          }
          else if($title=="명품 JAVA Programming"){
             $img="<img height='300px' src='http://image.yes24.com/goods/61269276/XL'/>";
          }
          else if($title=="오라클로 배우는 데이터베이스 개론과 실습"){
            $img="<img height='300px' src='http://image.yes24.com/goods/91452369/XL'/>";
          }
     else if($title=="이것이 안드로이드다 with 코틀린"){
            $img="<img height='300px' src='http://image.yes24.com/goods/97637851/XL'/>";
          }
     else if($title=="디지털 영상처리 입문"){
            $img="<img height='300px' src='http://image.yes24.com/momo/TopCate468/MidCate004/46733152.jpg'/>";
          }
     else if($title=="인텔 프로세서를 위한 시스템 프로그래밍"){
            $img="<img height='300px' src='http://image.yes24.com/momo/TopCate467/MidCate001/46608101.jpg'/>";
          }
     else if($title=="Mano의 컴퓨터시스템구조"){
            $img="<img height='300px' src='http://image.yes24.com/momo/TopCate1051/MidCate009/105088320(1).jpg'/>";
          }
     else if($title=="Do it! 장고+부트스트랩 파이썬 웹 개발의 정석"){
            $img="<img height='300px' src='https://image.yes24.com/goods/96541859/L'/>";
          }
     else if($title=="이산수학"){
            $img="<img height='300px' src='https://image.yes24.com/goods/35196368/L'/>";
          }
     else if($title=="프로그래밍 언어론"){
            $img="<img height='300px' src='http://image.yes24.com/momo/TopCate10/MidCate08/979571.jpg'/>";
          }
     else if($title=="데이터 통신과 네트워킹"){
            $img="<img height='300px' src='http://image.yes24.com/momo/TopCate64/MidCate03/6327927.jpg'/>";
          }
     else if($title=="네트워크 보안 에센셜"){
            $img="<img height='300px' src='https://image.yes24.com/goods/36974687/L'/>";
          }
     else if($title=="알기쉬운 건축환경"){
            $img="<img height='300px' src='https://image.yes24.com/goods/3896819/L'/>";
          }
     else if($title=="아름다운 교회건축"){
            $img="<img height='300px' src='https://image.yes24.com/goods/2999924/L'/>";
          }
     else if($title=="건축조형디자인론"){
            $img="<img height='300px' src='https://image.yes24.com/goods/241310/L'/>";
          }
     else if($title=="스케치업 브이레이"){
            $img="<img height='300px' src='https://image.yes24.com/goods/65571971/L'/>";
          }
     else if($title=="건축제도의 기본"){
            $img="<img height='300px' src='https://image.yes24.com/goods/55062/L'/>";
          }
     else if($title=="건축조형의장"){
            $img="<img height='300px' src='https://image.yes24.com/goods/64584759/L'/>";
          }
     else if($title=="건축계획론"){
            $img="<img height='300px' src='https://image.yes24.com/goods/6219331/L'/>";
          }
     else if($title=="강구조설계"){
            $img="<img height='300px' src='https://image.yes24.com/goods/102726159/L'/>";
          }
     else if($title=="알기 쉽게 풀어 쓴 160개의 건축+법 이야기"){
            $img="<img height='300px' src='https://image.yes24.com/goods/78527659/L'/>";
          }
    ?>
        <div style="float:left;margin-right:5%; margin-top:3%">
          <!--그림 선택시 id넘겨주며 재고수정 화면으로 이동-->
            <a href="수정.php?stock_id=<?php echo $stock["stock_id"];?>">
                <?php echo $img; ?>
                <h3><?php echo $title;?></h3><p><?php echo $writer; ?> | <?php echo $publisher; ?><br>가격 : <?php echo $price;?>원<br>재고 : <?php echo $bookstock;?></p><br>
            </a>
        </div>
      <?php } ?>
    </div>
    </body>
</html>
