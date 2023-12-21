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
$g=$_POST['roll_no'];
$t=$_POST['address'];
$v=$_POST['course'];
$s=$_POST['phone_no'];
$sql="INSERT INTO student(name,roll_no,address,course,phone_no) VALUES ('$n','$g','$t','$v','$s')";
$result=mysqli_query($conn,$sql);
if($result){
echo "New record added";
}
else{
echo mysqli_error($conn);
}
}
?>
