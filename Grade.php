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
$n=$_POST['name'];
$g=$_POST['grade'];
$sql="INSERT INTO grade(name,grade) VALUES ('$n','$g')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>
