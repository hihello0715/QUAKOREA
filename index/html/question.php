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
        <link rel="stylesheet" type="text/css" href="../css/nav.css">
        <link rel="stylesheet" type="text/css" href="../css/board.css?ver=1">
        <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/navm.css">
        <link rel="stylesheet" media="all and (max-width: 640px)" href="../css/mobile/nonem.css">
    </head>

    <?php include("./bind/header.html")?>

<body>
    <sectionc class="sec1">
        <div class="sub_title">
            <h1>문의</h1>
            <p>question</p>
        </div>
        <div class="inner">
            <div class="sec">

                <div class="write_area">
                    <div class="board_write_title">문의하기</div>
                    <form action="./question/question_ok.php" method="post">
                        <div class="board_write_title_textarea_wrapper">
                            <div class="board_write_subtitle_wrapper">
                                <div class="board_write_subtitle">제목</div>
                            </div>
                            <textarea name="title" class="board_write_title_textarea" rows="1" cols="55" minlength="2"
                                maxlength="100" required></textarea>
                        </div>
                        <div class="board_write_title_textarea_wrapper">
                            <div class="board_write_subtitle_wrapper">
                                <div class="board_write_subtitle">작성자</div>
                            </div>
                            <textarea name="name" class="board_write_nametitle_textarea" rows="1" cols="55"
                                minlength="2" maxlength="4" required></textarea>
                        </div>
                        <div class="board_write_title_textarea_wrapper">
                            <div class="board_write_subtitle_wrapper">
                                <div class="board_write_subtitle">이메일</div>
                            </div>
                            <textarea name="email" class="board_write_nametitle_textarea" rows="1" cols="55"
                                minlength="2" maxlength="20" required></textarea>
                        </div>
                        <div class="board_write_content_textarea_wrapper">
                            <textarea name="content" class="board_write_contenttitle_textarea" rows="1" cols="55"
                                required></textarea>
                        </div>

                        <div class="board_write_title_textarea_wrapper">
                            <div class="board_write_subtitle_wrapper">
                                <div class="board_write_subtitle">비밀번호</div>
                            </div>
                            <input type="password" name="pw" class="board_write_password_textarea" minlength="4"
                                maxlength="20" required></textarea>
                        </div>
                        <div class="writepage_write_wrapper">
                            <button class="board_writepage_write" type="submit">문의하기</button>
                        </div>
                    </form>
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