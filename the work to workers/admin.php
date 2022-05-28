<?php
$conn=mysqli_connect("localhost","root","","work2work");

$username=$_POST["name"];

$password=$_POST["psw"];

$q="select * from admin where username='$username' and password='$password'"; 
$data=mysqli_query($conn,$q);
if(mysqli_num_rows($data)>0)
{
while($row=mysqli_fetch_array($data)) 
{
session_start();
$_SESSION["id"]=$row[0];
header("location:admin/loginhome.php");
}
}
else
{
?>
<script>
alert("Incorrect");
window.location="adminlogin.php";
</script>
<?php
}
?>