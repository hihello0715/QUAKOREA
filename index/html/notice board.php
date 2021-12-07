<?php

	header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

	// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
	$db = new mysqli("localhost:3306","quakorea19","Qua!1390019","quakorea19"); 
	$db->set_charset("utf8");

	function mq($sql)
	{
		global $db;
		return $db->query($sql);
	}

  
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
    <link rel="stylesheet" type="text/css" href="../css/board&qna.css?ver=1">
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
            <li><a href="../html/Q&A.php">Q&A</a></li>
            <li><a href="../html/question.html">문의</a></li>
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
          <li><a class="head" href="../html/Q&A.php">Q&A</a></li>
          <li><a class="head" href="../html/question.html">문의</a></li>
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
                    <div class="caption_text"></div>
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
         if(isset($_GET['page'])){
          $page = $_GET['page'];
            }else{
              $page = 1;
            }
              $sql = mq("select * from board");
              $row_num = mysqli_num_rows($sql); //게시판 총 레코드 수
              $list = 10; //한 페이지에 보여줄 개수
              $block_ct = 5; //블록당 보여줄 페이지 개수

              $block_num = ceil($page/$block_ct); // 현재 페이지 블록 구하기
              $block_start = (($block_num - 1) * $block_ct) + 1; // 블록의 시작번호
              $block_end = $block_start + $block_ct - 1; //블록 마지막 번호

              $total_page = ceil($row_num / $list); // 페이징한 페이지 수 구하기
              if($block_end > $total_page) $block_end = $total_page; //만약 블록의 마지박 번호가 페이지수보다 많다면 마지박번호는 페이지 수
              $total_block = ceil($total_page/$block_ct); //블럭 총 개수
              $start_num = ($page-1) * $list; //시작번호 (page-1)에서 $list를 곱한다.

              $sql2 = mq("select * from board order by idx desc limit $start_num, $list");  
              while($board = $sql2->fetch_array()){
              $title=$board["title"]; 
                if(strlen($title)>30)
                { 
                  $title=str_replace($board["title"],mb_substr($board["title"],0,30,"utf-8")."...",$board["title"]);
                }
                $sql3 = mq("select * from reply where con_num='".$board['idx']."'");
                $rep_count = mysqli_num_rows($sql3);
              ?>
                <tr>
                    
                    <td class = "board_list_title"><li class ="list_li"></li>
                        <?php
                            echo "<a href='./board/board_view.php?idx=".$board["idx"]."'>";
                            echo $board["title"];
                            echo "</a>";
                        ?>
                     
                    </td>
                    <td class= "board_list">
                        <?php
                            echo $board["date"];
                        ?>
                    </td >
                    <td class= "board_list">
                        <?php
                            echo $board["name"];
                        ?>
                    </td>
                    <td class= "board_list">
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
    <form class = "search_form"action="./notice board_result.php" method="get">
      <select name="catgo" class="search_select">
        <option value="title">제목</option>
        <option value="name">작성자</option>
        <option value="content">내용</option>
      </select>
      <input type="text" name="search" size="40" required="required" /> <button class ="search_button">검색</button>
    </form>
    </div>
    <div class="page_num"">
      <ul class ="board_paging">
        <?php
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면
            echo "<li class='fo_re'>처음</li>"; 
          }else{
            echo "<li><a href='?page=1'>처음</a></li>"; //알니라면 처음글자에 1번페이지로 갈 수있게 링크
          }
          if($page <= 1)
          { //만약 page가 1보다 크거나 같다면 빈값
            
          }else{
          $pre = $page-1; //pre변수에 page-1을 해준다 만약 현재 페이지가 3인데 이전버튼을 누르면 2번페이지로 갈 수 있게 함
            echo "<li><a href='?page=$pre'>이전</a></li>"; //이전글자에 pre변수를 링크한다. 이러면 이전버튼을 누를때마다 현재 페이지에서 -1하게 된다.
          }
          for($i=$block_start; $i<=$block_end; $i++){ 
            //for문 반복문을 사용하여, 초기값을 블록의 시작번호를 조건으로 블록시작번호가 마지박블록보다 작거나 같을 때까지 $i를 반복시킨다
            if($page == $i){ //만약 page가 $i와 같다면 
              echo "<li class='fo_re'>$i</li>"; //현재 페이지에 해당하는 번호에 굵은 빨간색을 적용한다
            }else{
              echo "<li><a href='?page=$i'>$i</a></li>"; //아니라면 $i
            }
          }
          if($block_num >= $total_block){ //만약 현재 블록이 블록 총개수보다 크거나 같다면 빈 값
          }else{
            $next = $page + 1; //next변수에 page + 1을 해준다.
            echo "<li><a href='?page=$next'>다음</a></li>"; //다음글자에 next변수를 링크한다. 현재 4페이지에 있다면 +1하여 5페이지로 이동하게 된다.
          }
          if($page >= $total_page){ //만약 page가 페이지수보다 크거나 같다면
            echo "<li class='fo_re'>마지막</li>"; //마지막 글자에 긁은 빨간색을 적용한다.
          }else{
            echo "<li><a href='?page=$total_page'>마지막</a></li>"; //아니라면 마지막글자에 total_page를 링크한다.
          }
        ?>
      </ul>
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