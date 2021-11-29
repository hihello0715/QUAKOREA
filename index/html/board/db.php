
        <?php
            $currentPage = 1;
            if (isset($_GET["currentPage"])) {
                $currentPage = $_GET["currentPage"];
            }
 
            //mysqli_connect()함수로 커넥션 객체 생성
            $conn = mysqli_connect("localhost:3307", "root", "ms010530","board");
            $db->set_charset("utf8");

	        function mq($sql)
	        {
		      global $db;
		      return $db->query($sql);
	        }
            // 커넥션 객체 생성 확인
            if($conn) {
                echo "연결 성공<br>";
            } else {
                die("연결 실패 : " .mysqli_error());
            }
            
        
        ?>
