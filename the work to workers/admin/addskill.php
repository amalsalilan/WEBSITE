<?php
$conn=mysqli_connect("localhost","root","","work2work");
$name=$_POST["skill"];
$q="insert ignore into skill values(0,'$name')";
mysqli_query($conn,$q);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("inserted");
window.location="skillform.php";
</script>
<?php
}
else
{
?>
<script>
alert("already inserted");
window.location="skillform.php";
</script>
<?php
}
?>