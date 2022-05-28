<?php
$conn=mysqli_connect("localhost","root","","work2work");
session_start();
$id=$_SESSION["id"];
$eid=$_GET["id"];
$q="update event set status='rejected' where id='$eid'";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("rejected");
window.location="newwork.php";

</script>
<?php
}
else
{
?>
<script>
alert("cancel");
window.location="newwork.php";

</script>
<?php
}
?>
