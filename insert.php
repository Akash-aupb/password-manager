<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>password manager</h2></center>
<br>
<?php
include("DBConnection.php");
$isbn=$_POST["name"];
$title=$_POST["password"];
//$author=$_POST["author"];
//$edition=$_POST["edition"];
//$publication=$_POST["publication"];
$query = "insert into password_info(name,value) values('$isbn','$title')";
$result = mysqli_query($db,$query);
?>
<h3>  information is inserted successfully </h3>
<a href="search.php"> To search for the password information click here </a>
</body>
</html>
