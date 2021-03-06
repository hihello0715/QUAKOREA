<?php
                $connect = mysqli_connect("localhost:3306","quakorea19","Qua!1390019","quakorea19");
                $idx = $_GET['idx'];
                session_start();
                $query = "select idx, title, content, date, hit, name from board where idx =$idx";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
	?>
<!doctype html>
<head>
<meta charset="UTF-8">
<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAKOREA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/nav.css">
    <link rel="stylesheet" type="text/css" href="../../css/board_delete.css?ver=1">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../../css/mobile/navm.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../../css/mobile/nonem.css">
</head>

<header>
  <nav>
    <a href="http://www.quakorea.com/" class="logo"></a>
    <ul class="gnb1 inner">
      <li class="title"><a href="../../html/aboutus.html">회사소개</a></li>
      <li class="title"><a href="../../html/review.html">제품 story</a></li>
      <li class="title"><a href="../../html/product_QUACOK.html">제품</a></li>
      <li class="title"><a href="../../html/notice board.php">고객지원</a></li>
      <li class="title"><a href="../../html/News_none.html">홍보센터</a></li>
      <li class="snb">
        <div class="box">
          <ul>
            <li><a href="../../html/aboutus.html">기업소개</a></li>
            <li><a href="../../html/Greeting.html">인사</a></li>
            <li><a href="../../html/history.html">연혁</a></li>
            <li><a href="../../html/patent.html">특허</a></li>
            <li><a href="../../html/ci.html">CI</a></li>
          </ul>
          <ul>
            <li><a href="../../html/review.html">제품리뷰</a></li>
          </ul>
          <ul class="product">
            <li><a href="../../html/product_QUACOK.html">전체제품</a></li>
            <ul>
              <li><a href="../../html/product_QUACOK.html">QUACOK</a></li>
              <li><a href="../../html/product_QUABAND.html">QUABAND</a></li>
              <li><a href="../../html/product_SPONGE.html">여과기</a></li>
              <li><a href="../../html/product_QUABOX.html">부화통</a></li>
              <li><a href="../../html/product_LED.html">조명</a></li>
            </ul>
          </ul>
          <ul>
            <li><a href="../../html/notice board.php">게시판</a></li>
            <li><a href="../../html/Q&A.php">Q&A</a></li>
            <li><a href="../../html/question.html">문의</a></li>
            <li><a href="../../html/map.html">오시는 길</a></li>
          </ul>
          <ul>
            <li><a href="../../html/News_none.html">소식</a></li>
            <li><a href="../../html/promotional_none.html">홍보물</a></li>
            <li><a href="../../html/video.html">영상</a></li>
            <li><a href="../../html/brochure.html">브로슈어</a></li>
          </ul>

          <div class="familysite">
            <div class="box">
              <p>Family Site</p>
              <a href="#" class="quao2"> <img src="../../img/quao2-color.png"> </a>
              <a href="#" class="quatops"> <img src="../../img/quatops-color.png"> </a>
              <a href="#" class="quaexe"> <img src="../../img/quaexe-color.png"> </a>
              <a href="#" class="quainno"> <img src="../../img/quainno-color.png"> </a>
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
          <li><a class="head" href="../../html/aboutus.html">기업소개</a></li>
          <li><a class="head" href="../../html/Greeting.html">인사</a></li>
          <li><a class="head" href="../../html/history.html">연혁</a></li>
          <li><a class="head" href="../../html/patent.html">특허</a></li>
          <li><a class="head" href="../../html/ci.html">CI</a></li>
        </ul>
        <li id="nav2" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">제품 story</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../../html/review.html">제품리뷰</a></li>
        </ul>
        <li id="nav3" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">제품</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../../html/product_QUACOK.html">전체제품</a></li>
          <li><a class="head magin" href="../../html/product_QUACOK.html">QUACOK</a></li>
          <li><a class="head magin" href="../../html/product_QUABAND.html">QUABAND</a></li>
          <li><a class="head magin" href="../../html/product_SPONGE.html">여과기</a></li>
          <li><a class="head magin" href="../../html/product_QUABOX.html">부화통</a></li>
          <li><a class="head magin" href="../../html/product_LED.html">조명</a></li>
        </ul>
        <li id="nav4" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">고객지원</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../../html/notice board.php">게시판</a></li>
          <li><a class="head" href="../../html/Q&A.php">Q&A</a></li>
          <li><a class="head" href="../../html/question.html">문의</a></li>
          <li><a class="head" href="../../html/map.html">오시는 길</a></li>
        </ul>
        <li id="nav5" class="toggle accordion-toggle">
          <span class="icon-plus"></span>
          <a class="menu-link" href="#">홍보센터</a>
        </li>
        <ul class="menu-submenu accordion-content">
          <li><a class="head" href="../../html/News_none.html">소식</a></li>
          <li><a class="head" href="../../html/promotional_none.html">홍보물</a></li>
          <li><a class="head" href="../../html/video.html">영상</a></li>
          <li><a class="head" href="../../html/brochure.html">브로슈어</a></li>
        </ul>
      </ul>
      
      <!-- menu-list accordion-->
    </div>

    <div class="right">
      <div class="link">
        <a href="#" class="on">KR</a>
        <a href="../../en/notice board_none_en.html">EN</a>
        <a href="../../jp/notice board_none_jp.html">JP</a>
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
            <h1 >게시판</h1>
            <p>Notice board</p>
        </div>
        <div class="inner">
            <div class="sec">
      
            <div class="write_area">
            <div class="board_write_title">비밀번호를 입력하시오.</div>
                <form action="board_delete_ok.php?idx=<?php echo $idx;?>" method="post">
                    <div class="board_write_title_textarea_wrapper">
                      <div class="board_write_subtitle_wrapper"><div class="board_write_subtitle">비밀번호 :</div></div>
                        <input type="password" name="pw" class="board_write_password_textarea" minlength="4" maxlength="20" required></textarea>
                    </div>         
                    <div class="board_deletepage_btn_wrapper">
                        <div class="board_writepage_write" onclick="location.href='./qna_view.php?idx=<?php echo $idx;?>'">취소</div><button class="board_writepage_write" type="submit">삭제</button>
                    </div>
                </form>
            </div>
               
            </div>            
            </div>
        </div>
    </sectionc>
    
    

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="../../script/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="../../script/subpage.js"></script>
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
          <a href="../../html/sitemap.html">사이트맵</a>
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
