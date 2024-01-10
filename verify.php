<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
       
    <?php
        if($_POST['name']=="admin" && $_POST['pass']=="ad1234")
            echo "ยินดีต้อนรับคุณ ADMIN";
        elseif($_POST['name']=="member" && $_POST['pass']=="mem1234")
            echo "ยินดีต้อนรับคุณ MEMBER";
        else
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง";
    ?>
    </div>
    <div  style="text-align: center;">
        <a href="index.php">กลับไปหน้าหลัก</a>
    </div>
    
</body>
</html>
