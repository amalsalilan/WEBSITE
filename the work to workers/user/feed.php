<?php
$conn=mysqli_connect("localhost","root","","work2work");
$name=$_POST["feedback"];
$d=date("Y:m:d");
session_start();
$id=$_SESSION["id"];
$q="insert ignore into feedback values(0,'$id','".$_POST["w"]."','$name','".$_POST["rating"]."','$d')";
mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("inserted");
window.location="viewworkers.php";
</script>
<?php
}
else
{
?>
<script>
alert("already inserted");
window.location="viewworkers.php";
</script>
<?php
}
?>