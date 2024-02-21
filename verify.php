<?php
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php"); 
    }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    
    <?php
    
        if($_POST['name']=="admin" && $_POST['pass']=="ad1234"){
            $_SESSION["username"]="admin";
            $_SESSION["role"]="a";
            $_SESSION["id"]=session_id();
            header("location:index.php"); //redirect
            die();
        }
        elseif($_POST['name']=="member" && $_POST['pass']=="mem1234")
        {
            $_SESSION["username"]="member";
            $_SESSION["role"]="m";
            $_SESSION["id"]=session_id();
            header("location:index.php"); //redirect
            die();
        }
        else{
            $_SESSION['error']='error';
            header("location:login.php");
            die();

        }
           
    
        
    ?>
   
   
    
</body>
</html>
