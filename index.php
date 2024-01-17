<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <form action="#">
        หมวดหมู่ : <select >
                <option value="all">--ทั้งหมด--</option>
                <option value="general">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
        </select> 
        <?php
        if(isset($_SESSION['id'])){
            echo "<div style='float: right';>
            ผู้ใช้งานระบบ : $_SESSION[username]&nbsp;&nbsp;
            <a href=logout.php >ออกจากระบบ</a> 
            </div><br><a href=newpost.php>สร้างกระทู้ใหม่</a>";// ใน php style ต้องใช้ '' คุม
       
        }else{
            echo "<a href=login.php style='float: right';>เข้าสู่ระบบ</a>";
        }
        ?>
    </form>
    <ul > 
        <?php
        
       
            for($i=1;$i<=10;$i++){
                echo "<li> <a href=post.php?id=$i>กระทู้ที่ $i</a>"; 
                if(isset($_SESSION['id'])&&$_SESSION['role']=='a'){
                    echo "&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
                }
                echo "</li>";
            }
        
   
   

    ?>
        <!-- <li><a href="post.php?id=1" >กระทู้ที่ 1</a></li>
        <li><a href="post.php?id=2" >กระทู้ที่ 2</a></li>
        <li><a href="post.php?id=3" >กระทู้ที่ 3</a></li>
        <li><a href="post.php?id=4" >กระทู้ที่ 4</a></li>
        <li><a href="post.php?id=5" >กระทู้ที่ 5</a></li> -->
    </ul>
    
</body>
</html>