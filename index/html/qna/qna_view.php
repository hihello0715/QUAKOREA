<?php
                $connect = mysqli_connect("localhost:3306","quakorea19","Qua!1390019","quakorea19");
                $idx = $_GET['idx'];
                session_start();
                $query = "select idx, title, content, date, name from qna where idx =$idx";
                $result = $connect->query($query);
                $rows = mysqli_fetch_assoc($result);
                $hit = "update qna set hit=hit+1 where idx=$idx";
                $connect->query($hit);
	?>
<!Doctype html>

<head>
    <meta charset="UTF-8">
    <html lang="ko">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>QUAKOREA</title>
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://hangeul.pstatic.net/hangeul_static/css/nanum-square-round.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="../../css/nav.css">
        <link rel="stylesheet" type="text/css" href="../../css/board_view.css?ver=1">
        <link rel="stylesheet" media="all and (max-width: 640px)" href="../../css/mobile/navm.css">
        <link rel="stylesheet" media="all and (max-width: 640px)" href="../../css/mobile/nonem.css">
    </head>

    <?php include("./bind/header.html")?>

<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>Q&A</h1>
            <p>Q&A</p>
        </div>
        <div class="inner">
            <div class="sec">


                <div class="view_area">
                    <div class="view_title"><?php echo $rows['title']?></div>
                    <div class="view_row">
                        <div class="writer_wrapper">
                            <div class="writer">작성자</div>
                            <div class="writer_DB"><?php echo $rows['name']?></div>
                        </div>
                        <div class="date_hit_wrapper">
                            <div class="date">작성일</div>
                            <div class="date_DB"><?php echo $rows['date']?></div>
                        </div>
                    </div>
                    <div class="view_content">
                        <?php echo nl2br("$rows[content]"); ?>
                    </div>
                    <!-- MODIFY & DELETE -->
                    <div>
                        <button class="view_btn" onclick="location.href='../Q&A.php'">목록</button>
                        <button class="view_btn"
                            onclick="location.href='qna_modify.php?idx=<?php echo $rows['idx']; ?>'">수정</button>
                        <button class="view_btn"
                            onclick="location.href='qna_delete.php?idx=<?php echo $rows['idx']; ?>'">삭제</button>
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

<?php include("./bind/footer.html")?>


</html>