<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo"connection success";
}<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo"connection success";
}
?>
<?php
if(isset($_POST['submit'])){
$n=$_POST['username'];
$g=$_POST['password'];
$sql="INSERT INTO login(username,password) VALUES ('$n','$g')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
die("connection failed".$conn->connect_error);
}
else
{
echo"connection success";
}
?>
<?php
if(isset($_POST['submit'])){
$n=$_POST['username'];
$g=$_POST['password'];
$sql="INSERT INTO login(username,password) VALUES ('$n','$g')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>

?>
<?php
if(isset($_POST['submit'])){
$n=$_POST['username'];
$g=$_POST['password'];
$sql="INSERT INTO login(username,password) VALUES ('$n','$g')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>
