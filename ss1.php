<?php
 $dbhost = "localhost";  
 $dbuser = "root";
 $dbpass = "";
 $db = "test";
 $conn = new mysqli($dbhost,$dbuser, $dbpass,$db) or die();
 print("------------------------------RESPONCE RECORDED PLEASE WAIT TILL OUR TEAM CONNECTS YOU??-------------------------------");
 $name=$_GET['name'];
 $phno=$_GET['phno'];
 $email=$_GET['email'];
 $occup=$_GET['occup'];
 $value=$_GET['value'];
 $breed=$_GET['breed'];
 $res = mysqli_query($conn,"insert into Dogdata values('$name','$phno','$email','$occup','$value','$breed')");
?>