<?php
$conn=mysqli_connect("localhost","root","","php") or die("unable to connect:");
$query="select * from student";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
echo $row['name'];
echo " ".$row['roll_no'];
echo " ".$row['address'];
echo " ".$row['course'];
echo " ".$row['phone_no'];
echo"<br>";
}
?>
