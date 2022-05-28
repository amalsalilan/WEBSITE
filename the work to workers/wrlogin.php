<?php
$conn=mysqli_connect("localhost","root","","work2work");

$name=$_POST["name"];

$password=$_POST["psw"];

$q="select * from worker where email='$name' and password='$password'";
$data=mysqli_query($conn,$q);
if(count($data)>0)
{
while($row=mysqli_fetch_array($data))
{
if($row[11]=="approved")
{

session_start();
$_SESSION["id"]=$row[0];
header("location:worker/workerhomepage.php");
}
else
{
?>
<script>
alert("not activated");
window.location="workerlogin.php";
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
window.location="workerlogin.php";
</script>
<?php

}
?>




