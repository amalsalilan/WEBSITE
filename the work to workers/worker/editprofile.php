<?php
session_start();
$conn=mysqli_connect("localhost","root","","work2work");
$id=$_SESSION["id"];
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$address=$_POST["address"];
$email=$_POST["email"];
$mobile=$_POST["mobile"];
$skill=$_POST["skill"];
$experience=$_POST["exp"];
$id_proof=$_FILES["id_proof"]["name"];
$state=$_POST["state"];
$district=$_POST["district"];


$q="update worker set name='$name',age='$age',gender='$gender',address='$address', email='$email',mobile='$mobile',skill='$skill',experience='$experience',id_proof='$id_proof',state='$state',district='$district' where id='$id'";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{

move_uploaded_file($_FILES["id_proof"]["tmp_name"],"../proof/$id_proof");
?>
<script>
alert("updated");
window.location="profile.php";
</script>
<?php

}
else
{
echo mysqli_error($conn);

}

{
echo mysqli_error($conn);
//header("location:profile.php");
}
?>