<?php
                $connect = mysqli_connect("localhost:3307","quakorea19","Qua!1390019","quakorea19") or die("fail");
                
                $name = $_POST[name];                      //Writer
                $pw = $_POST[pw];                        //Password
                $title = $_POST[title];                  //Title
                $content = $_POST[content];              //Content
                $date = date('Y-m-d H:i:s');            //Date
 
                $URL = '../notice board.php';                   //return URL
 
 
                $query = "insert into board (idx, name, pw, title, content, date, hit) 
                        values(null,'$name', '$pw', '$title', '$content', '$date',0)";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "글이 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
 