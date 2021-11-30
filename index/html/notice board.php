<?php
            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }
 
            //mysqli_connect()함수로 커넥션 객체 생성
            $conn = mysqli_connect("localhost:3307", "root", "ms010530","board");
            //페이징 작업을 위한 테이블 내 전체 행 갯수 조회 쿼리
            $sqlCount = "SELECT count(*) FROM board";
            $resultCount = mysqli_query($conn,$sqlCount);
            if($rowCount = mysqli_fetch_array($resultCount)){
                $totalRowNum = $rowCount["count(*)"];   //php는 지역 변수를 밖에서 사용 가능.
            }
                        
            $rowPerPage = 10;   //페이지당 보여줄 게시물 행의 수
            $begin = ($currentPage -1) * $rowPerPage;
            //board 테이블을 조회해서 board_no, board_title, board_user, board_date 필드 값을 내림차순으로 정렬하여 모두 가져 오는 쿼리
            //입력된 begin값과 rowPerPage 값에 따라 가져오는 행의 시작과 갯수가 달라지는 쿼리
            $sql = "SELECT idx, name, title, pw, content, date, hit FROM board order by idx desc limit ".$begin.",".$rowPerPage."";
            $result = mysqli_query($conn,$sql);
        ?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAKOREA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../css/board.css?ver=1">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/navm.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/nonem.css">
</head>

<header>
  <nav>
    <a href="http://www.quakorea.com/" class="logo"></a>
    <ul class="gnb1 inner">
      <li class="title"><a href="../html/aboutus.html">회사소개</a></li>
      <li class="title"><a href="../html/review.html">제품 story</a></li>
      <li class="title"><a href="../html/product_QUACOK.html">제품</a></li>
      <li class="title"><a href="../html/notice board.php">고객지원</a></li>
      <li class="title"><a href="../html/News_none.html">홍보센터</a></li>
      <li class="snb">
        <div class="box">
          <ul>
            <li><a href="../html/aboutus.html">기업소개</a></li>
            <li><a href="../html/Greeting.html">인사</a></li>
            <li><a href="../html/history.html">연혁</a></li>
            <li><a href="../html/patent.html">특허</a></li>
            <li><a href="../html/ci.html">CI</a></li>
          </ul>
          <ul>
            <li><a href="../html/review.html">제품리뷰</a></li>
          </ul>
          <ul class="product">
            <li><a href="../html/product_QUACOK.html">전체제품</a></li>
            <ul>
              <li><a href="../html/product_QUACOK.html">QUACOK</a></li>
              <li><a href="../html/product_QUABAND.html">QUABAND</a></li>
              <li><a href="../html/product_SPONGE.html">여과기</a></li>
              <li><a href="../html/product_QUABOX.html">부화통</a></li>
              <li><a href="../html/product_LED.html">조명</a></li>
            </ul>
          </ul>
          <ul>
            <li><a href="../html/notice board.php">게시판</a></li>
            <li><a href="../html/Q&A_none.html">Q&A</a></li>
            <li><a href="../html/question_none.html">문의</a></li>
            <li><a href="../html/map.html">오시는 길</a></li>
          </ul>
          <ul>
            <li><a href="../html/News_none.html">소식</a></li>
            <li><a href="../html/promotional_none.html">홍보물</a></li>
            <li><a href="../html/video.html">영상</a></li>
            <li><a href="../html/brochure.html">브로슈어</a></li>
          </ul>

          <div class="familysite">
            <div class="box">
              <p>Family Site</p>
              <a href="#" class="quao2"> <img src="../img/quao2-color.png"> </a>
              <a href="#" class="quatops"> <img src="../img/quatops-color.png"> </a>
              <a href="#" class="quaexe"> <img src="../img/quaexe-color.png"> </a>
              <a href="#" class="quainno"> <img src="../img/quainno-color.png"> </a>
            </div>
          </div>

        </div>
      </li>
    </ul>

    <div id="menu-container" class="gnb2">
      <div id="menu-wrapper">
        <div id="hamburger-menu"><span></span><span></span><span></span></div>
        <!-- hamburger-menu -->
      </div>
      <!-- menu-wrapper -->
      <ul class="menu-list accordion">
        <li id="nav1" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">회사소개</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../html/aboutus.html">기업소개</a></li>
          <li><a class="head" href="../html/Greeting.html">인사</a></li>
          <li><a class="head" href="../html/history.html">연혁</a></li>
          <li><a class="head" href="../html/patent.html">특허</a></li>
          <li><a class="head" href="../html/ci.html">CI</a></li>
        </ul>
        <li id="nav2" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">제품 story</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../html/review.html">제품리뷰</a></li>
        </ul>
        <li id="nav3" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">제품</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../html/product_QUACOK.html">전체제품</a></li>
          <li><a class="head magin" href="../html/product_QUACOK.html">QUACOK</a></li>
          <li><a class="head magin" href="../html/product_QUABAND.html">QUABAND</a></li>
          <li><a class="head magin" href="../html/product_SPONGE.html">여과기</a></li>
          <li><a class="head magin" href="../html/product_QUABOX.html">부화통</a></li>
          <li><a class="head magin" href="../html/product_LED.html">조명</a></li>
        </ul>
        <li id="nav4" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">고객지원</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../html/notice board.php">게시판</a></li>
          <li><a class="head" href="../html/Q&A_none.html">Q&A</a></li>
          <li><a class="head" href="../html/question_none.html">문의</a></li>
          <li><a class="head" href="../html/map.html">오시는 길</a></li>
        </ul>
        <li id="nav5" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">홍보센터</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../html/News_none.html">소식</a></li>
          <li><a class="head" href="../html/promotional_none.html">홍보물</a></li>
          <li><a class="head" href="../html/video.html">영상</a></li>
          <li><a class="head" href="../html/brochure.html">브로슈어</a></li>
        </ul>
      </ul>
      
      <!-- menu-list accordion-->
    </div>

    <div class="right">
      <div class="link">
        <a href="#" class="on">KR</a>
        <a href="../en/notice board_none_en.html">EN</a>
        <a href="../jp/notice board_none_jp.html">JP</a>
      </div>

      <a href="#" class="business">
        <p>BUSINESS</p>
        <i class="fas fa-plus"></i>
      </a>
    </div>
  </nav>
</header>

<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>게시판</h1>
            <p>Notice board</p>
        </div>
        <div class="inner">
            <div class="sec">
              
             <table class="list-table">
             <caption>
                    <div class="caption_text">목록</div>
                    <a href="board/board_write.html"><button class="board_write">글작성</button></a>
                  </caption> 
               <thead>
                 <tr>
                   <th class="board_title">제목</th>
                   <th class="board_date">작성일</th>
                   <th class="board_date">작성자</th>
                   <th class="board_hit">조회수</th>
                 </tr>
               </thead>
           
               <tbody>
               <?php
                while($board = mysqli_fetch_array($result)){ 
            ?>
                <tr>
                    
                    <td>
                        <?php
                            echo "<a href='./board/board_view.php?idx=".$board["idx"]."'>";
                            echo $board["title"];
                            echo "</a>";
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $board["date"];
                        ?>
                    </td>
                    <td>
                        <?php
                            echo $board["name"];
                        ?>
                    </td>
                    <td>
                    <?php
                            echo $board["hit"];
                        ?>
                        </td>
                </tr>
            <?php
                }
            ?>

               </tbody>

             </table>
            
             <div class="search_box" >
    <form action="/page/board/search_result.php" method="get">
      <select name="catgo">
        <option value="title">제목</option>
        <option value="name">작성자</option>
        <option value="content">내용</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button>검색</button>
    </form>
    </div>
                             
            </div>
        </div>
    </sectionc>
    
    

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../script/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../script/subpage.js"></script>
    <script>
        AOS.init();
    </script>
</body>

<footer>
    <div class="set">
      <div class="text">
        <div class="top">
          <a href="#">이용약관</a>
          <a href="#">개인정보처리방침</a>
          <a href="../html/sitemap.html">사이트맵</a>
        </div>
        <div class="bottom">
          <span>충청북도 청주시 흥덕구 가로수로 1251 (복대동) </span><span class="block">충북대학교 G-테크 벤처센터 301-2호</span>
          <span onclick="location.href='tel:0432335880'" class="click">TEL. 043-233-5880</span>
          <span>FAX. 043-233-5881</span>
        </div>
      </div>
    </div>
</footer>
</html>