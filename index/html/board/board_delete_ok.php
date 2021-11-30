<?php
header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

// localhost = DB주소, web=DB계정아이디, 1234=DB계정비밀번호, post_board="DB이름"
$db = new mysqli("localhost:3307","root","ms010530","board"); 
$db->set_charset("utf8");

function mq($sql)
{
    global $db;
    return $db->query($sql);
}
$bno = $_GET['idx'];
$userpw = $_POST['pw'];
$established = "select * from board where idx =$bno";
$result = mysqli_query($db, $established);
$row = mysqli_fetch_array($result);

if ($row['pw']== $userpw){
    $sql = $sql = mq("delete from board where idx='$bno';"); ?>
    
    <script type="text/javascript">alert("삭제되었습니다."); </script>
    <meta http-equiv="refresh" content="0 url=../notice board.php">
    <?php }
else{ ?>
        <script type="text/javascript">alert("비밀번호가 틀렸습니다!"); </script>
        <meta http-equiv="refresh" content="0 url=./board_delete.php?idx=<?php echo $bno; ?>">
    <?php }
?>
