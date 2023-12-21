<?php
$conn=mysqli_connect("localhost","root","","php") or die("unable to connect:");
$query="select * from login";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
echo $row['username'];
echo " ".$row['password'];
echo"<br>";
}
?>
