<?php
$conn=mysqli_connect("localhost","root","","work2work");

$name=$_POST["name"];

$age=$_POST["age"];

$gender=$_POST["gender"];

$address=$_POST["address"];

$email=$_POST["email"];

$password=$_POST["password"];

$mobile=$_POST["mobile"];

$skill=$_POST["skill"];

$proof=$_FILES["id_proof"]["name"];

$experience=$_POST["experience"];

$state=$_POST["state"];
$district=$_POST["district"];












$q="insert into worker values(0,'$name','$age','$gender','$address','$email','$password','$mobile','$skill','$experience','$proof','pending','$state','$district')";
mysqli_query($conn,$q);
echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
move_uploaded_file($_FILES["id_proof"]["tmp_name"],"proof/$proof");
echo("insert");



}
else
{
echo mysqli_error($conn);

}
?>