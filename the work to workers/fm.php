<?php
$conn=mysqli_connect("localhost","root","","work2work");

$name=$_POST["name"];

$dateofbirth=$_POST["dateofbirth"];

$gender=$_POST["gender"];

$place=$_POST["place"];

$address=$_POST["address"];

$email=$_POST["email"];

$password=$_POST["password"];

$mobile=$_POST["mobile"];

$q="insert into user values(0,'$name','$dateofbirth','$gender','$place','$address','$email','$password','$mobile','pending')";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
echo("insert");
}
else
{
echo mysqli_error($conn);

}
?>