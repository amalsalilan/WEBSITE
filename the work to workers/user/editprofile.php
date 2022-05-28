<?php
session_start();
$conn=mysqli_connect("localhost","root","","work2work");
$id=$_SESSION["id"];
$name=$_POST["name"];
$dateofbirth=$_POST["dateofbirth"];
$gender=$_POST["gender"];
$place=$_POST["place"];
$address=$_POST["address"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];

$q="update user set name='$name',dateofbirth='$dateofbirth',gender='$gender',place='$place',address='$address', email='$email',mobile='$mobile' where id='$id'";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("updated");
window.location="profile.php";
</script>
<?php
}
else
{
header("location:profile.php");
}
?>