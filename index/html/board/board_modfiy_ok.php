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
$bno = $_GET['idx'];
$username = $_POST['name'];
$userpw = $_POST['pw'];
$title = $_POST['title'];
$content = $_POST['content'];
$established = "select * from board where idx =$bno";
$result = mysqli_query($db, $established);
$row = mysqli_fetch_array($result);

if ($row['pw']== $userpw){
    $sql = mq("update board set name='".$username."',pw='".$userpw."',title='".$title."',content='".$content."' where idx='".$bno."'"); ?>
    
    <script type="text/javascript">alert("수정되었습니다."); </script>
    <meta http-equiv="refresh" content="0 url=./board_view.php?idx=<?php echo $bno; ?>">
    <?php }
else{ ?>
        <script type="text/javascript">alert("비밀번호가 틀렸습니다!"); </script>
        <meta http-equiv="refresh" content="0 url=./board_view.php?idx=<?php echo $bno; ?>">
    <?php }
?>
