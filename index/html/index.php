<!DOCTYPE html>
<html lang="ko">

<head>
    <link rel="shortcut icon" href="../img/qua_favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUAKOREA</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="index/css/index.css">
    <link rel="stylesheet" media="all and (max-width: 640px)" href="index/css/indexm.css">
</head>

<?php include("./bind/header.html")?>

<body>
    <video id="video" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
        <source src="../quakorea/index/img/bacak">
    </video>

    <section class="sec1">
        <div class="text">
            <h1>수족관 세상을 깨우다</h1>
            <p>수족관 제품의 혁신</p>
            <p>고객중심 사용 편리</p>
            <p>기술과 디자인 융합</p>
            <p>미래 지향 제품선도</p>
        </div>
    </section>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="index/script/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="index/script/index.js"></script>
    <script>
    AOS.init();
    </script>
</body>

<?php include("./bind/footer.html")?>

</html>