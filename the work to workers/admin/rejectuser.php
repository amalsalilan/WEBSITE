<?php
$conn=mysqli_connect("localhost","root","","work2work");
$id=$_GET["id"];
$q="update user set status='rejected' where id='$id'";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("Rejected");
window.location="viewusers.php";
</script>
<?php


}

?>