<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAKOREA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/brochure.css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/navm.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/brochurem.css">
</head>

<?php include("./bind/header.html")?>


<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>브로슈어</h1>
            <p>brochure</p>
        </div>
        <div class="inner">
            <div class="content1">
                <a href="http://ecatalog.talkzinekorea.com/quakorea/eng/catalog_content.html" target='_blank'>
                    <div class="img"></div>
                </a>
                <div class="text">
                    <div class="top">
                        <h1>e-catalog</h1>
                        <p>전자카탈로그</p>
                    </div>
                    <div class="button">
                        <a href="../E-catalog/catalog_KOR.html"
                            onclick="window.open(this.href, '_blank', 'width=1500px, height=900px, toolbars=no, scrollbars=no'); return false;">국문</a>
                        <a href="../E-catalog/catalog_ENG.html"
                            onclick="window.open(this.href, '_blank', 'width=1500px, height=900px, toolbars=no, scrollbars=no'); return false;">영문</a>
                        <a href="../E-catalog/catalog_JPN.html"
                            onclick="window.open(this.href, '_blank', 'width=1300px, height=900px, toolbars=no, scrollbars=no'); return false;">일문</a>
                    </div>
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

<?php include("./bind/footer.html")?>

</html>