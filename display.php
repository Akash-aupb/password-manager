<!DOCTYPE HTML>
<html>
<body bgcolor="87ceeb">
<center><h2>Password Manager </h2></center>
<br>
<?php
include("DBConnection.php");
$search = $_REQUEST["search"];
$query = "select name,value from password_info where name like '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);
if(mysqli_num_rows($result)>0)if(mysqli_num_rows($result)>0)
{
?>
<table border="2" align="center" cellpadding="5" cellspacing="5">
<tr>
<th> name </th>
<th> password </th>
</tr>
<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["name"];?> </td>
<td><?php echo $row["value"];?> </td>
</tr>
<?php
}
}
else
echo "<center>No record found  by the name $search </center>" ;
?>
</table>

</body>
</html>
<br>
