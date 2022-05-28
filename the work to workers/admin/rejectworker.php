<?php
$conn=mysqli_connect("localhost","root","","work2work");
$id=$_GET["id"];
$q="update worker set status='rejected' where id='$id'";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("Rejected");
window.history.back();
</script>
<?php


}

?>