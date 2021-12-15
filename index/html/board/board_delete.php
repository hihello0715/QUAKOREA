<?php
                $connect = mysqli_connect("localhost:3307","quakorea19","Qua!1390019","quakorea19");
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

    <?php include("./bind/header.html")?>


<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>게시판</h1>
            <p>Notice board</p>
        </div>
        <div class="inner">
            <div class="sec">

                <div class="write_area">
                    <div class="board_write_title">비밀번호를 입력하시오.</div>
                    <form action="board_delete_ok.php?idx=<?php echo $idx;?>" method="post">
                        <div class="board_write_title_textarea_wrapper">
                            <div class="board_write_subtitle_wrapper">
                                <div class="board_write_subtitle">비밀번호 :</div>
                            </div>
                            <input type="password" name="pw" class="board_write_password_textarea" minlength="4"
                                maxlength="20" required></textarea>
                        </div>
                        <div class="board_deletepage_btn_wrapper">
                            <div class="board_writepage_write"
                                onclick="location.href='./qna_view.php?idx=<?php echo $idx;?>'">취소</div><button
                                class="board_writepage_write" type="submit">삭제</button>
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


<?php include("./bind/footer.html")?>

</html>