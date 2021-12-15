<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAKOREA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/map.css">
    <link rel="stylesheet" type="text/css" href="../css/nav.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/navm.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/mapm.css">
</head>

<?php include("./bind/header.html")?>

<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>오시는 길</h1>
            <p>Way to come</p>
        </div>
        <div class="inner">
            <div class="content1">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3201.582076771198!2d127.42406749736998!3d36.63644518679929!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fff04ee6767474b!2z7Lap67aB64yA7ZWZ6rWQIEct7YWM7YGs67Kk7LKY7IS87YSw!5e0!3m2!1sko!2skr!4v1633061203923!5m2!1sko!2skr"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="address">
                    <span>주소</span>
                    <span>충청북도 청주시 흥덕구 가로수로 1251 (복대동) 충북대학교 G-테크 벤처센터 301-2호</span>
                </div>
                <div class="tel">
                    <span>Tel</span>
                    <span onclick="location.href='tel:0432335880'" class="click">043-233-5880</span>
                </div>
                <div class="fax">
                    <span>Fax</span>
                    <span>043-233-5881</span>
                </div>
                <div class="mail">
                    <span>Mail</span>
                    <span onclick="location.href='mailto:quakorea@naver.com'" class="click">quakorea@naver.com</span>
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