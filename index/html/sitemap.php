<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAKOREA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/sitemap.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="index/css/sitemapm.css">
</head>

<?php include("./bind/header.html")?>

<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>사이트맵</h1>
            <p>Site map</p>
        </div>
        <div class="inner">
            <div class="content1">
                <ul>
                    <li>
                        <a href="../html/aboutus.php">회사소개</a>
                        <ul>
                            <li><a href="../html/aboutus.php">기업소개</a></li>
                            <li><a href="../html/Greeting.php">인사</a></li>
                            <li><a href="../html/history.php">연혁</a></li>
                            <li><a href="../html/patent.php">특허</a></li>
                            <li><a href="../html/ci.php">CI</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">제품 story</a>
                        <ul>
                            <li><a href="../html/review.php">제품리뷰</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">제품</a>
                        <ul>
                            <li><a href="../html/product_QUACOK.php">전체제품</a></li>
                            <li class="none">
                                <ul>
                                    <li><a href="../html/product_QUACOK.php">QUACOK</a></li>
                                    <li><a href="../html/product_QUABAND.php">QUABAND</a></li>
                                    <li><a href="../html/product_SPONGE.php">여과기</a></li>
                                    <li><a href="../html/product_QUABOX.php">부화통</a></li>
                                    <li><a href="../html/product_LED.php">조명</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">고객지원</a>
                        <ul>
                            <li><a href="#">게시판</a></li>
                            <li><a href="#">Q&A</a></li>
                            <li><a href="#">문의</a></li>
                            <li><a href="../html/map.php">오시는 길</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">홍보센터</a>
                        <ul>
                            <li><a href="#">소식</a></li>
                            <li><a href="#">홍보물</a></li>
                            <li><a href="#">영상</a></li>
                            <li><a href="#">브로슈어</a></li>
                        </ul>
                    </li>
                </ul>
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

<?php include("./bind/footer.html")?>

</html>