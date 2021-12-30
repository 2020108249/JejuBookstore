<!DOCTYPE html>
<html>
    <head>
        <title>제주서점</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css" type="text/css">
    </head>
    <body>
        <p style="float:right">관리자(국제대학교) 님</p>
        <br><br>
        <div id="logo">
            <h1><a href="../제주대학교/home.html">제주서점(INU)</a></h1>
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
    <?php
      $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
      $sql = "SELECT * FROM istock";
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
        if($title=="여성건강간호학.2"){ #id에 따라 해당 id에 맞는 이미지 저장
          $img="<img height='300px' src= 'http://image.kyobobook.co.kr/images/book/large/349/l9791164234349.jpg'/>";
        }
        else if($title=="기계요소설계"){
          $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/583/l9788956130583.jpg'/>";
        }
        else if($title=="기초유체역학"){
          $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/484/l9791186290484.jpg'/>";
        }
        else if($title=="프로그래밍&가공 CNC 선반/ 머시닝 센터 실기 실습"){
          $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/467/l9788942916467.jpg'/>";
        }
       else if($title=="Inventor 기계제도 실기 실무"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/896/l9791157673896.jpg'/>";
            }
       else if($title=="기계제도 & 도면해독"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/217/l9788998497217.jpg'/>";
            }
       else if($title=="기계공학도를 위한 알기 쉬운 실용 기계재료 "){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/712/l9788968669712.jpg'/>";
            }
       else if($title=="기초부터 시작하는 PLC: 멜섹Q "){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/203/l9791156643203.jpg'/>";
            }
       else if($title=="전기설비기술기준"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/535/l9788938113535.jpg'/>";
            }
       else if($title=="전력전자공학(제3판)"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/908/l9788973936908.jpg'/>";
            }
       else if($title=="최신 전기설비설계(2011)"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/557/l9788973936557.jpg'/>";
            }
       else if($title=="최신 송배전공학"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/241/l9788938111241.jpg'/>";
            }
       else if($title=="전력시설물 진단기술"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/650/l9788973743650.jpg'/>";
            }
       else if($title=="아동 심리평가와 검사"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/876/l9788975486876.jpg'/>";
            }
       else if($title=="임상 미술치료 이론과 실제"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/797/l9791161054797.jpg'/>";
            }
       else if($title=="임상적용을 위한 미술치료기법"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/358/l9788999715358.jpg'/>";
            }
       else if($title=="활동을 통한 성격심리학의 이해"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/607/l9788999716607.jpg'/>";
            }
       else if($title=="인간 이해를 위한 성격심리학"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/213/l9788999711213.jpg'/>";
            }
       else if($title=="재활상담의 이론과 실제"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/042/l9788999719042.jpg'/>";
            }
       else if($title=="임상 현장을 위한 아동 미술치료 프로그램"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/689/l9791187971689.jpg'/>";
            }
       else if($title=="발달정신병리학"){
              $img="<img height='300px' src='http://image.kyobobook.co.kr/images/book/large/374/l9788999711374.jpg'/>";
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
