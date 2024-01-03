<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post</title>
</head>
<body>
    <h1 style="text-align: center;">Webboard KakKak</h1>
    <hr>
    <div style="text-align: center;">
        <?php echo "ต้องการแสดงกระทู้หมายเลข $_GET[id]"?>
      
    </div>    
       <br>
            <table style="border: 2px solid black; width: 40%; "align="center">
                <tr>
                    <th  style="text-align: left; background-color: #6CD2FE;">แสดงความคิดเห็น</th>
                </tr>
                <tr>
                    <td align="center"><textarea name="text" cols="60" rows="10"></textarea></td>
                </tr>
                <tr>
                    <td align="center"><input type="submit" value="ส่งข้อความ"></td>
                </tr>
            </table>
       
    
    <br>
    <div  style="text-align: center;">
        <a href="index.html">กลับไปหน้าหลัก</a>
    </div>
    
    
</body>
</html>