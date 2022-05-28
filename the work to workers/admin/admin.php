<?php
$conn=mysqli_connect("localhost","root","","work2work");

$username=$_POST["name"];

$password=$_POST["psw"];

$q="select * from admin where username='$username' and password='$password'"; 
$data=mysqli_query($conn,$q);
if(count($data)>0)
{
while($row=mysqli_fetch_array($data)) 
{
header("location:admin/loginhome.php");
}
}
else
{
echo "incorrect details";
}
?>