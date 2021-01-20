<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 print("------------------------------RESPONCE RECORDED PLEASE WAIT TILL OUR TEAM CONNECTS YOU??-------------------------------");
 $name=$_GET['name'];
 $subject=$_GET['subject'];
 $message=$_GET['message'];

 $res = mysqli_query($conn,"insert into contacts values('$name','$subject','$message')");
?>