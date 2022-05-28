<?php
$conn=mysqli_connect("localhost","root","","work2work");

$name=$_POST["name"];

$password=$_POST["psw"];

$q="select * from user where email='$name' and password='$password'"; 
$data=mysqli_query($conn,$q);
if(mysqli_num_rows($data)>0)
{
while($row=mysqli_fetch_array($data)) 
{
if($row[9]=="approved")
{

session_start();
$_SESSION["id"]=$row[0];
header("location:user/userhome.php");
}
else
{
?>
<script>
alert("not activated");
window.location="userlogin.php";
</script>
<?php
}
}
}
else
{
?>
<script>
alert("incorrect email or password");
window.location="userlogin.php";
</script>
<?php

}
?>