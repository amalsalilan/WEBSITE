<?php
$conn=mysqli_connect("localhost","root","","work2work");
session_start();
$id=$_SESSION["id"];

$p1=$_POST["psw1"];
$p2=$_POST["psw2"];
$p3=$_POST["psw3"];



$q="select * from worker where password='$p1' and id='$id'"; 
$data=mysqli_query($conn,$q);
if(count($data)>0)
{
while($row=mysqli_fetch_array($data)) 
{

if($p2==$p3)
{
$q1="update worker set password='$p2' where id='$id'";
mysqli_query($conn,$q1);
//echo mysqli_error($conn);
if(mysqli_affected_rows($conn)>0)
{
?>
<script>
alert("UPDATED");
window.location="workerhomepage.php";

</script>
<?php
}
}
else
{
?>
<script>
alert("PASSWORD MISMATCH");
window.location="changepsw.php";

</script>
<?php
}
}
}
else
{
//echo mysqli_error($conn);
?>
<script>
alert("INCORRECT PASSWORD");
window.location="changepsw.php";

</script>
<?php
}
?>