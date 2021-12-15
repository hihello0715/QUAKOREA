<?php
                $connect = mysqli_connect("localhost:3307","quakorea19","Qua!1390019","quakorea19") or die("fail");
                
                $name = $_POST[name];                      //Writer
                $pw = $_POST[pw];                        //Password
                $title = $_POST[title];                  //Title
                $content = $_POST[content];              //Content
                $date = date('Y-m-d H:i:s'); 
                $email = $_POST[email];            //Date
 
                $URL = '../question.php';                   //return URL
 
 
                $query = "insert into question (idx, name, pw, title, content, date, email) 
                        values(null,'$name', '$pw', '$title', '$content', '$date', '$email')";
 
 
                $result = $connect->query($query);
                if($result){
?>                  <script>
                        alert("<?php echo "문의가 등록되었습니다."?>");
                        location.replace("<?php echo $URL?>");
                    </script>
<?php
                }
                else{
                        echo "FAIL";
                }
 
                mysqli_close($connect);
?>
 