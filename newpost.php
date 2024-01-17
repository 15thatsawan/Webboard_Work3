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
    <?php
     if(isset($_SESSION['id'])){
        echo "ผู้ใช้: $_SESSION[username]&nbsp;&nbsp;";
    }
    else{
        header("location:index.php");  
    }
    ?>
    <form >
        <table>
            <tr>
                <td>หมวดหมู่: </td>
                <td><select >
                <option value="all">--ทั้งหมด--</option>
                <option value="general">เรื่องทั่วไป</option>
                <option value="study">เรื่องเรียน</option>
                </select> </td>
            </tr>
            <tr>
                <td>หัวข้อ:</td>
                <td><input type="text"></td>
            </tr>
            <tr>
                <td>เนื้อหา:</td>
                <td><textarea name="" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>    </td>
                <td ><input type="submit" value="บันทึกข้อความ"></td>
            </tr>
             
        
        </table>
        
    </form>
    
</body>
</html>