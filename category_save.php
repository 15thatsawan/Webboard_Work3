<?php
session_start();
$name=$_POST['name'];

$conn=new PDO("mysql:host=localhost;dbname=webboard;charset=utf8","root","");
$sql="INSERT INTO category (name)
 VALUES ('$name')";
 $conn->exec($sql);
 $_SESSION['add_name']="success";
 $conn=null;

 header("location:category.php"); 
    die();
?>