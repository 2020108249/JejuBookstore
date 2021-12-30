<!DOCTYPE html>
<html>
    <head>
        <title>제주서점</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="design.css" type="text/css">
    </head>
    <body>
        <a href="hnu_login.html" style="float:right">Login</a>
        <br><br>
        <div id="logo">
            <h1><a href="../제주대학교/home.html">제주서점(HNU)</a></h1>
            <div id="search_box">
              <form action="book_search.php" method="get">
                <input type="text" name="search" size="40" required="required" />
                <button id="search_button">검색</button>
              </form>
            </div>
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
    <?php #도서 내용 출력
      $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
      $sql = "SELECT * FROM hstock";
      $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
      while($stock = mysqli_fetch_array($result)){
        $id=$stock["stock_id"]; #DB에서 id 받아서 저장
        $title=$stock["book_title"];  #DB에서 title 받아서 저장
        $bookstock=$stock["book_stock"];  #DB에서 재고 받아서 저장
        $writer=$stock["book_writer"];  #DB에서 저자 받아서 저장
        $publisher=$stock["book_publisher"];  #DB에서 출판사 받아서 저장
        $price=$stock["book_price"];  #DB에서 가격 받아서 저장

        if($title=="운동과 스포츠 생리학"){ #id에 따라 해당 id에 맞는 이미지 저장
          $img="<img height='300px' src= 'http://image.yes24.com/momo/TopCate327/MidCate007/32661431.jpg'/>";
        }
        else if($title=="휴먼 퍼포먼스와 운동생리학"){
          $img="<img height='300px' src='http://image.yes24.com/momo/TopCate901/MidCate006/10624307.jpg
'/>";
        }
        else if($title=="새로운 케어 기술"){
          $img="<img height='300px' src='https://image.yes24.com/goods/1775009/L'/>";
        }
        else if($title=="정신질환의 진단 및 통계편람"){
          $img="<img height='300px' src='https://image.yes24.com/goods/17843603/L'/>";
        }
       else if($title=="소아정신의학"){
              $img="<img height='300px' src='http://image.yes24.com/momo/TopCate426/MidCate003/42525861.jpg'/>";
            }
       else if($title=="피부과 상담 실무"){
              $img="<img height='300px' src='https://image.yes24.com/goods/14611431/L'/>";
            }
       else if($title=="닥터 배의 술술 보건의학통계"){
              $img="<img height='300px' src='https://image.yes24.com/goods/6756234/L'/>";
            }
       else if($title=="손에 잡히는 의학용어"){
              $img="<img height='300px' src='https://image.yes24.com/goods/17832018/L'/>";
            }
       else if($title=="근육뼈대계통의 기능해부학 및 운동학"){
              $img="<img height='300px' src='https://image.yes24.com/goods/63811646/L'/>";
            }
       else if($title=="NASM의퍼스널 트레이닝"){
              $img="<img height='300px' src='https://image.yes24.com/goods/57715168/L'/>";
            }
       else if($title=="운동 기능해부학"){
              $img="<img height='300px' src='https://image.yes24.com/goods/71837779/L'/>";
            }
       else if($title=="유전공학의 이해"){
              $img="<img height='300px' src='https://image.yes24.com/sysimage/renew/loadSpace.png'/>";
            }
       else if($title=="인체생명과학(16판)"){
              $img="<img height='300px' src='https://image.yes24.com/goods/89525674/L'/>";
            }
       else if($title=="파워 운동생리학(11판)"){
              $img="<img height='300px' src='https://image.yes24.com/goods/102910081/L'/>";
            }
       else if($title=="근골격계 질환의 통증해부학"){
              $img="<img height='300px' src='https://image.yes24.com/goods/8966580/L'/>";
            }
       else if($title=="근골격계 촉진법"){
              $img="<img height='300px' src='https://image.yes24.com/goods/23462106/L'/>";
            }
       else if($title=="알기쉬운 약물 부작용 메커니즘 "){
              $img="<img height='300px' src='https://image.yes24.com/goods/33730882/L'/>";
            }
       else if($title=="허리 치료와 역학"){
              $img="<img height='300px' src='https://image.yes24.com/goods/42643840/L'/>";
            }
       else if($title=="근막이란 무엇이며 왜 중요한가?"){
              $img="<img height='300px' src='https://image.yes24.com/goods/74404742/L'/>";
            }
       else if($title=="키 무브먼트"){
              $img="<img height='300px' src='https://image.yes24.com/goods/89913635/L'/>";
            }
       else if($title=="신경정신의학"){
              $img="<img height='300px' src='https://image.yes24.com/goods/37529999/L'/>";
            }
    ?>
        <div style="float:left; margin-right:5%; margin-top:3%">  <!--저장한 내용 출력 -->
          <?php echo $img; ?>
          <h3><?php
          echo $title;?></h3><p><?php echo $writer; ?> | <?php echo $publisher; ?><br>가격 : <?php echo $price;?>원<br>재고 : <?php echo $bookstock;?></p><br>
        </div>
      <?php } ?>
    </body>
    </html>
