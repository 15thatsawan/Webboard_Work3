<?php
session_start();
$cat=$_POST['category'];
$topic=$_POST['topic'];
$comment=$_POST['comment'];

$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="INSERT INTO post (title, content, post_date, cat_id,user_id)
 VALUES ('$topic','$comment',now(),'$cat',$_SESSION[user_id])";
 $conn->exec($sql);
 $conn=null;
 header("location:index.php"); 
    die();
?>